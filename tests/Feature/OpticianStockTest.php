<?php

use App\Models\StockCategory;
use App\Models\StockRecord;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create(['name' => 'Optician One']);
});

function stockRecordData(array $overrides = []): array
{
    return array_merge([
        'date' => '2026-11-01',
        'new_stock' => 'Yes',
        'name' => 'Supplier delivery',
        'patient_code' => '',
        'booklet_no' => 'B-10',
        'qty_in' => 20,
        'qty_out' => 0,
    ], $overrides);
}

function addStockRecord($test, StockCategory $category, array $overrides = [])
{
    return $test->actingAs($test->user)
        ->from(route('optician.stock.show', $category))
        ->post(route('optician.stock.records.store', $category), stockRecordData($overrides));
}

function balancesOf(StockCategory $category): array
{
    return $category->orderedRecords()->pluck('balance')->all();
}

test('the optician dashboard navbar links to the stock page', function () {
    $this->actingAs($this->user)
        ->get(route('optician.index'))
        ->assertOk()
        ->assertSee(route('optician.stock'), false)
        ->assertSee('>Stock</a>', false);
});

test('a category can be created and is opened straight away', function () {
    $response = $this->actingAs($this->user)
        ->post(route('optician.stock.categories.store'), ['name' => 'Contact lens solution']);

    $category = StockCategory::sole();
    $response->assertRedirect(route('optician.stock.show', $category))->assertSessionHas('success');

    $this->actingAs($this->user)
        ->get(route('optician.stock'))
        ->assertOk()
        ->assertSee('Contact lens solution');
});

test('category names must be unique', function () {
    StockCategory::create(['name' => 'Cases']);

    $this->actingAs($this->user)
        ->from(route('optician.stock'))
        ->post(route('optician.stock.categories.store'), ['name' => 'Cases'])
        ->assertSessionHasErrors('name');

    expect(StockCategory::count())->toBe(1);
});

test('records keep a running balance within their category', function () {
    $solution = StockCategory::create(['name' => 'Contact lens solution']);
    $cases = StockCategory::create(['name' => 'Cases']);

    addStockRecord($this, $solution, ['date' => '2026-11-01', 'qty_in' => 20])->assertSessionHasNoErrors();
    addStockRecord($this, $solution, ['date' => '2026-11-02', 'name' => 'Ada Okafor', 'patient_code' => '413/07/2026', 'qty_in' => 0, 'qty_out' => 3]);
    addStockRecord($this, $solution, ['date' => '2026-11-03', 'qty_in' => 0, 'qty_out' => 2]);
    addStockRecord($this, $cases, ['date' => '2026-11-01', 'qty_in' => 5]);

    expect(balancesOf($solution))->toBe([20, 17, 15])
        ->and(balancesOf($cases))->toBe([5])
        ->and($solution->currentBalance())->toBe(15);

    $record = StockRecord::where('name', 'Ada Okafor')->sole();
    expect($record->patient_code)->toBe('413/07/2026')
        ->and($record->recorded_by)->toBe('Optician One');
});

test('a backdated record slots into date order and later balances are recalculated', function () {
    $category = StockCategory::create(['name' => 'Cases']);
    addStockRecord($this, $category, ['date' => '2026-11-01', 'qty_in' => 10]);
    addStockRecord($this, $category, ['date' => '2026-11-05', 'qty_in' => 0, 'qty_out' => 4]);

    addStockRecord($this, $category, ['date' => '2026-11-03', 'qty_in' => 6]);

    expect($category->orderedRecords()->get()->map(fn ($r) => [$r->date->toDateString(), $r->balance])->all())
        ->toBe([['2026-11-01', 10], ['2026-11-03', 16], ['2026-11-05', 12]]);
});

test('the stock card shows S/N, all columns and the current balance', function () {
    $category = StockCategory::create(['name' => 'Cases']);
    addStockRecord($this, $category, ['date' => '2026-11-01', 'qty_in' => 10, 'booklet_no' => 'B-77']);
    addStockRecord($this, $category, ['date' => '2026-11-02', 'name' => 'Ada Okafor', 'patient_code' => '413/07/2026', 'qty_in' => 0, 'qty_out' => 1]);

    $this->actingAs($this->user)
        ->get(route('optician.stock.show', $category))
        ->assertOk()
        ->assertSeeInOrder(['S/N', 'Date', 'New Stock', 'Name', 'Patient Code', 'Booklet Number', 'Qty In', 'Qty Out', 'Balance'])
        ->assertSeeInOrder(['>1<', 'Supplier delivery', '>2<', 'Ada Okafor'], false)
        ->assertSee('value="B-77"', false)
        ->assertSee('value="413/07/2026"', false)
        ->assertSee('Current balance')
        ->assertSee('>9<', false);
});

test('editing a record recalculates the balances after it', function () {
    $category = StockCategory::create(['name' => 'Cases']);
    addStockRecord($this, $category, ['date' => '2026-11-01', 'qty_in' => 10]);
    addStockRecord($this, $category, ['date' => '2026-11-02', 'qty_in' => 0, 'qty_out' => 4]);
    $first = $category->orderedRecords()->first();

    $this->actingAs($this->user)
        ->from(route('optician.stock.show', $category))
        ->put(route('optician.stock.records.update', [$category, $first]), stockRecordData(['date' => '2026-11-01', 'qty_in' => 12]))
        ->assertSessionHasNoErrors()
        ->assertSessionHas('success');

    expect(balancesOf($category))->toBe([12, 8]);
});

test('deleting a record recalculates the balances after it', function () {
    $category = StockCategory::create(['name' => 'Cases']);
    addStockRecord($this, $category, ['date' => '2026-11-01', 'qty_in' => 10]);
    addStockRecord($this, $category, ['date' => '2026-11-02', 'qty_in' => 5]);
    addStockRecord($this, $category, ['date' => '2026-11-03', 'qty_in' => 0, 'qty_out' => 3]);
    $middle = $category->orderedRecords()->skip(1)->first();

    $this->actingAs($this->user)
        ->delete(route('optician.stock.records.destroy', [$category, $middle]))
        ->assertSessionHas('success');

    expect(balancesOf($category))->toBe([10, 7]);
});

test('invalid records are rejected and nothing is saved', function () {
    $category = StockCategory::create(['name' => 'Cases']);

    addStockRecord($this, $category, ['name' => '', 'qty_in' => -1, 'date' => 'not-a-date'])
        ->assertSessionHasErrors(['name', 'qty_in', 'date']);
    addStockRecord($this, $category, ['qty_in' => 0, 'qty_out' => 0])
        ->assertSessionHasErrors('qty_in');

    expect(StockRecord::count())->toBe(0);
});

test('a record cannot be edited or deleted through another category', function () {
    $cases = StockCategory::create(['name' => 'Cases']);
    $other = StockCategory::create(['name' => 'Cloths']);
    addStockRecord($this, $cases, ['qty_in' => 10]);
    $record = StockRecord::sole();

    $this->actingAs($this->user)
        ->put(route('optician.stock.records.update', [$other, $record]), stockRecordData(['qty_in' => 99]))
        ->assertNotFound();
    $this->actingAs($this->user)
        ->delete(route('optician.stock.records.destroy', [$other, $record]))
        ->assertNotFound();

    expect($record->fresh()->qty_in)->toBe(10);
});

test('categories can be renamed', function () {
    $category = StockCategory::create(['name' => 'Cases']);

    $this->actingAs($this->user)
        ->from(route('optician.stock'))
        ->put(route('optician.stock.categories.update', $category), ['name' => 'Spectacle cases'])
        ->assertSessionHasNoErrors();

    expect($category->fresh()->name)->toBe('Spectacle cases');
});

test('only empty categories can be deleted', function () {
    $empty = StockCategory::create(['name' => 'Empty']);
    $used = StockCategory::create(['name' => 'Cases']);
    addStockRecord($this, $used, ['qty_in' => 3]);

    $this->actingAs($this->user)
        ->from(route('optician.stock'))
        ->delete(route('optician.stock.categories.destroy', $used))
        ->assertSessionHasErrors('category');

    $this->actingAs($this->user)
        ->delete(route('optician.stock.categories.destroy', $empty))
        ->assertRedirect(route('optician.stock'));

    expect(StockCategory::pluck('name')->all())->toBe(['Cases'])
        ->and(StockRecord::count())->toBe(1);
});

test('stock pages require login', function () {
    $category = StockCategory::create(['name' => 'Cases']);

    $this->get(route('optician.stock'))->assertRedirect('/login');
    $this->get(route('optician.stock.show', $category))->assertRedirect('/login');
    $this->post(route('optician.stock.records.store', $category), stockRecordData())->assertRedirect('/login');

    expect(StockRecord::count())->toBe(0);
});
