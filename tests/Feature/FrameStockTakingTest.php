<?php

use App\Models\Frame;
use App\Models\Inventory;
use App\Models\StockMovement;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create(['name' => 'Stock Keeper']);
    $this->aviator = Frame::create(['sn' => 1, 'name' => 'Aviator Silver', 'price' => 18000, 'special_code' => 'METAL', 'quantity' => 24]);
    $this->kids = Frame::create(['sn' => 2, 'name' => 'Kids Flexi Blue', 'price' => 12000, 'special_code' => 'KIDS', 'quantity' => 18]);
});

function stockRow(array $overrides = []): array
{
    return array_merge([
        'date' => '2026-11-05',
        'patient_name' => 'Ada Okafor',
        'patient_code' => '413/07/2026',
        'booklet_no' => 'R-200',
        'qty_in' => 5,
        'qty_out' => 2,
    ], $overrides);
}

test('the stock form lists frames with their type and current stock', function () {
    $this->actingAs($this->user)
        ->get(route('admin.admin2'))
        ->assertOk()
        ->assertSee(route('admin2.stock.store'), false)
        ->assertSee('name="inputs[0][frame_id]"', false)
        ->assertSee('name="inputs[0][patient_name]"', false)
        ->assertSee('Patient Name')
        ->assertDontSee('new_stock', false)
        ->assertDontSee('New Stock')
        ->assertSee('Aviator Silver — METAL (in stock: 24)')
        ->assertSee('Kids Flexi Blue — KIDS (in stock: 18)')
        ->assertSee(route('admin2.stocklog'), false);
});

test('saving a stock row updates the frame, records the entry and logs the movement', function () {
    $this->actingAs($this->user)
        ->from(route('admin.admin2'))
        ->post(route('admin2.stock.store'), ['inputs' => [stockRow(['frame_id' => $this->aviator->id])]])
        ->assertSessionHasNoErrors()
        ->assertRedirect(route('admin.admin2'))
        ->assertSessionHas('success');

    expect($this->aviator->fresh()->quantity)->toBe(27);

    $entry = Inventory::sole();
    expect($entry->frame_id)->toBe($this->aviator->id)
        ->and($entry->name)->toBe('Aviator Silver')
        ->and($entry->patient_name)->toBe('Ada Okafor')
        ->and($entry->patient_code)->toBe('413/07/2026')
        ->and($entry->new_stock)->toBeNull()
        ->and($entry->qty_in)->toBe('5')
        ->and($entry->qty_out)->toBe('2')
        ->and($entry->balance)->toBe('27');

    $movement = StockMovement::sole();
    expect($movement->frame_id)->toBe($this->aviator->id)
        ->and($movement->type)->toBe(StockMovement::STOCK_ENTRY)
        ->and($movement->qty_in)->toBe(5)
        ->and($movement->qty_out)->toBe(2)
        ->and($movement->balance_after)->toBe(27)
        ->and($movement->item_type)->toBe('METAL')
        ->and($movement->inventory_id)->toBe($entry->id)
        ->and($movement->user_name)->toBe('Stock Keeper')
        ->and($movement->patient_name)->toBe('Ada Okafor')
        ->and($movement->patient_code)->toBe('413/07/2026')
        ->and($movement->reference)->toBe('Receipt R-200');
});

test('several rows, including the same frame twice, are applied in order', function () {
    $this->actingAs($this->user)
        ->post(route('admin2.stock.store'), ['inputs' => [
            stockRow(['frame_id' => $this->aviator->id, 'qty_in' => 10, 'qty_out' => 0]),
            stockRow(['frame_id' => $this->kids->id, 'qty_in' => 0, 'qty_out' => 3]),
            stockRow(['frame_id' => $this->aviator->id, 'qty_in' => 0, 'qty_out' => 4]),
        ]])
        ->assertSessionHasNoErrors();

    expect($this->aviator->fresh()->quantity)->toBe(30)
        ->and($this->kids->fresh()->quantity)->toBe(15)
        ->and(StockMovement::where('frame_id', $this->aviator->id)->orderBy('id')->pluck('balance_after')->all())->toBe([34, 30]);
});

test('an invalid row saves nothing at all', function () {
    $this->actingAs($this->user)
        ->from(route('admin.admin2'))
        ->post(route('admin2.stock.store'), ['inputs' => [
            stockRow(['frame_id' => $this->aviator->id]),
            stockRow(['frame_id' => 999999, 'qty_in' => -1, 'patient_name' => '']),
        ]])
        ->assertRedirect(route('admin.admin2'))
        ->assertSessionHasErrors(['inputs.1.frame_id', 'inputs.1.qty_in', 'inputs.1.patient_name']);

    expect($this->aviator->fresh()->quantity)->toBe(24)
        ->and(Inventory::count())->toBe(0)
        ->and(StockMovement::count())->toBe(0);
});

test('a row with nothing in or out is rejected', function () {
    $this->actingAs($this->user)
        ->post(route('admin2.stock.store'), ['inputs' => [stockRow(['frame_id' => $this->aviator->id, 'qty_in' => 0, 'qty_out' => 0])]])
        ->assertSessionHasErrors('inputs.0.qty_in');

    expect(StockMovement::count())->toBe(0);
});

test('selling a frame on an invoice is logged with the invoice and patient', function () {
    (new \App\Models\PatientInfo())->forceFill([
        'patient_id' => '413/07/2026', 'fullname' => 'Ada Okafor', 'first_name' => 'Ada', 'last_name' => 'Okafor',
        'date' => '1990-01-01', 'gender' => 'female', 'phone' => '08000000000', 'email' => 'ada@example.com',
        'city' => 'Lagos', 'state' => 'Lagos', 'street' => '1 Main St', 'occupation' => 'Teacher',
        'emergency_fullname' => 'Ben Okafor', 'emergency_relationship' => 'Brother',
        'emergency_phone' => '08000000001', 'emergency_email' => 'ben@example.com',
    ])->save();

    $this->actingAs($this->user)
        ->post(route('invoice.save'), ['pid' => '413/07/2026', 'discount' => '0', 'inputs' => [
            ['name' => 'Aviator Silver (Frame)', 'price' => '18000', 'qty' => '2'],
        ]])
        ->assertSessionHasNoErrors();

    $movement = StockMovement::sole();
    expect($this->aviator->fresh()->quantity)->toBe(22)
        ->and($movement->type)->toBe(StockMovement::SALE)
        ->and($movement->qty_out)->toBe(2)
        ->and($movement->balance_after)->toBe(22)
        ->and($movement->reference)->toStartWith('Invoice #')
        ->and($movement->patient_code)->toBe('413/07/2026')
        ->and($movement->patient_name)->toBe('Ada Okafor');
});

test('an invoice for an unregistered patient is logged with just the patient ID', function () {
    $this->actingAs($this->user)
        ->post(route('invoice.save'), ['pid' => 'Walk-in 1', 'discount' => '0', 'inputs' => [
            ['name' => 'Aviator Silver (Frame)', 'price' => '18000', 'qty' => '1'],
        ]])
        ->assertSessionHasNoErrors();

    expect(StockMovement::sole())
        ->patient_code->toBe('Walk-in 1')
        ->patient_name->toBeNull();
});

test('changing a frame quantity on the frame list is logged as a manual adjustment', function () {
    $this->actingAs($this->user)
        ->put(route('frame.update', ['frames' => $this->aviator]), ['name' => 'Aviator Silver', 'price' => 18000, 'quantity' => 20])
        ->assertSessionHasNoErrors();

    $movement = StockMovement::sole();
    expect($movement->type)->toBe(StockMovement::ADJUSTMENT)
        ->and($movement->qty_out)->toBe(4)
        ->and($movement->balance_after)->toBe(20);

    // Saving without changing the quantity adds no log entry.
    $this->actingAs($this->user)
        ->put(route('frame.update', ['frames' => $this->aviator]), ['name' => 'Aviator Silver Pro', 'price' => 18000, 'quantity' => 20]);
    expect(StockMovement::count())->toBe(1);
});

test('adding a new frame with stock logs its opening stock', function () {
    $this->actingAs($this->user)
        ->post(route('frame.store'), ['inputs' => [
            ['sn' => 3, 'name' => 'Rimless Titanium', 'price' => 25000, 'special_code' => 'TITAN', 'quantity' => 7],
        ]])
        ->assertSessionHasNoErrors();

    $movement = StockMovement::sole();
    expect($movement->item_name)->toBe('Rimless Titanium')
        ->and($movement->type)->toBe(StockMovement::OPENING)
        ->and($movement->qty_in)->toBe(7)
        ->and($movement->balance_after)->toBe(7);
});

test('editing a frame stock entry on the inventory list corrects the frame and logs it', function () {
    $this->actingAs($this->user)
        ->post(route('admin2.stock.store'), ['inputs' => [stockRow(['frame_id' => $this->aviator->id, 'qty_in' => 5, 'qty_out' => 0])]]);
    $entry = Inventory::sole();

    $this->actingAs($this->user)
        ->from(route('admin2.inventory'))
        ->put(route('admin2.inventory.update', ['item' => $entry]), [
            'date' => '2026-11-05', 'patient_name' => 'Ada Okafor', 'patient_code' => '413/07/2026', 'booklet_no' => 'R-200',
            'qty_in' => 8, 'qty_out' => 0,
        ])
        ->assertSessionHasNoErrors()
        ->assertSessionHas('success');

    $correction = StockMovement::latest('id')->first();
    expect($this->aviator->fresh()->quantity)->toBe(32)
        ->and($entry->fresh()->qty_in)->toBe('8')
        ->and($entry->fresh()->balance)->toBe('32')
        ->and($entry->fresh()->name)->toBe('Aviator Silver')
        ->and($correction->type)->toBe(StockMovement::CORRECTION)
        ->and($correction->qty_in)->toBe(3)
        ->and($correction->balance_after)->toBe(32)
        ->and($correction->reference)->toBe('Stock entry #'.$entry->id);
});

test('deleting a frame stock entry reverses it on the frame and logs it', function () {
    $this->actingAs($this->user)
        ->post(route('admin2.stock.store'), ['inputs' => [stockRow(['frame_id' => $this->aviator->id, 'qty_in' => 5, 'qty_out' => 1])]]);
    $entry = Inventory::sole();
    expect($this->aviator->fresh()->quantity)->toBe(28);

    $this->actingAs($this->user)
        ->delete(route('admin2.inventory.delete', ['item' => $entry]))
        ->assertSessionHas('success');

    $reversal = StockMovement::latest('id')->first();
    expect($this->aviator->fresh()->quantity)->toBe(24)
        ->and(Inventory::count())->toBe(0)
        ->and($reversal->type)->toBe(StockMovement::CORRECTION)
        ->and($reversal->qty_out)->toBe(4)
        ->and($reversal->balance_after)->toBe(24);
});

test('stock entries not linked to a frame keep working as before', function () {
    $old = Inventory::create(['date' => '2026-11-01', 'new_stock' => 'Yes', 'name' => 'Old item', 'patient_code' => 'X', 'booklet_no' => 'R-1', 'qty_in' => '10', 'qty_out' => '3', 'balance' => '7']);

    $this->actingAs($this->user)
        ->put(route('admin2.inventory.update', ['item' => $old]), [
            'date' => '2026-11-01', 'name' => 'Old item', 'patient_name' => 'Old Patient', 'patient_code' => 'X', 'booklet_no' => 'R-1',
            'qty_in' => 12, 'qty_out' => 3,
        ])
        ->assertSessionHasNoErrors();

    expect($old->fresh()->balance)->toBe('9')
        ->and($old->fresh()->patient_name)->toBe('Old Patient')
        ->and($old->fresh()->new_stock)->toBe('Yes')
        ->and(StockMovement::count())->toBe(0);
});

test('the stock log lists movements newest first and filters by frame and date', function () {
    $this->actingAs($this->user)
        ->post(route('admin2.stock.store'), ['inputs' => [
            stockRow(['frame_id' => $this->aviator->id, 'qty_in' => 5, 'qty_out' => 0]),
            stockRow(['frame_id' => $this->kids->id, 'qty_in' => 0, 'qty_out' => 3, 'booklet_no' => 'R-KIDS']),
        ]]);

    $this->actingAs($this->user)
        ->get(route('admin2.stocklog'))
        ->assertOk()
        ->assertSeeInOrder(['Kids Flexi Blue — KIDS', 'Aviator Silver — METAL'])
        ->assertSee('Stock received')
        ->assertSee('Stock removed')
        ->assertSee('Stock Keeper');

    $this->actingAs($this->user)
        ->get(route('admin2.stocklog', ['frame_id' => $this->aviator->id]))
        ->assertOk()
        ->assertSee('current stock')
        ->assertSee('Receipt R-200')
        ->assertSee('Ada Okafor')
        ->assertSee('413/07/2026')
        ->assertDontSee('Receipt R-KIDS');

    $this->actingAs($this->user)
        ->get(route('admin2.stocklog', ['from' => '2000-01-01', 'to' => '2000-01-02']))
        ->assertOk()
        ->assertSee('No stock changes recorded for this filter');
});

test('stock pages require login', function () {
    $this->get(route('admin2.stocklog'))->assertRedirect('/login');
    $this->post(route('admin2.stock.store'), ['inputs' => [stockRow(['frame_id' => $this->aviator->id])]])->assertRedirect('/login');

    expect($this->aviator->fresh()->quantity)->toBe(24);
});
