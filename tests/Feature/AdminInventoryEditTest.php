<?php

use App\Models\Inventory;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->item = Inventory::create([
        'date' => '2026-11-01',
        'new_stock' => 'Yes',
        'name' => 'Timolol',
        'patient_code' => '413/07/2026',
        'booklet_no' => 'R-100',
        'qty_in' => '20',
        'qty_out' => '5',
        'balance' => '15',
    ]);
    $this->listUrl = route('admin2.inventory', ['page' => 1]);
});

function validInventoryPayload(array $overrides = []): array
{
    return array_merge([
        'date' => '2026-11-02',
        'new_stock' => 'No',
        'name' => 'Timolol 0.5%',
        'patient_code' => '413/07/2026',
        'booklet_no' => 'R-101',
        'qty_in' => '30',
        'qty_out' => '10',
        'balance' => '20',
    ], $overrides);
}

test('inventory list rows have editable fields wired to their own update form', function () {
    $formId = 'update-inventory-'.$this->item->id;

    $this->actingAs($this->user)
        ->get($this->listUrl)
        ->assertOk()
        ->assertSee('id="'.$formId.'"', false)
        ->assertSee('form="'.$formId.'"', false)
        ->assertSee(route('admin2.inventory.update', ['item' => $this->item]), false)
        ->assertSee(route('admin2.inventory.delete', ['item' => $this->item]), false)
        ->assertSee('name="qty_in"', false)
        ->assertSee('name="qty_out"', false)
        ->assertDontSee('name="balance"', false);
});

test('balance is recalculated from qty in and qty out, ignoring any submitted balance', function () {
    $this->actingAs($this->user)
        ->from($this->listUrl)
        ->put(route('admin2.inventory.update', ['item' => $this->item]), validInventoryPayload([
            'qty_in' => '50',
            'qty_out' => '12',
            'balance' => '9999',
        ]))
        ->assertRedirect($this->listUrl)
        ->assertSessionHasNoErrors();

    expect($this->item->fresh())
        ->qty_in->toBe('50')
        ->qty_out->toBe('12')
        ->balance->toBe('38');
});

test('quantities must be non-negative numbers so balance can be calculated', function () {
    $this->actingAs($this->user)
        ->from($this->listUrl)
        ->put(route('admin2.inventory.update', ['item' => $this->item]), validInventoryPayload([
            'qty_in' => 'ten',
            'qty_out' => '-3',
        ]))
        ->assertRedirect($this->listUrl)
        ->assertSessionHasErrors(['qty_in', 'qty_out']);

    expect($this->item->fresh())
        ->qty_in->toBe('20')
        ->balance->toBe('15');
});

test('editing an inventory row saves it and returns to the list with a success message', function () {
    $this->actingAs($this->user)
        ->from($this->listUrl)
        ->put(route('admin2.inventory.update', ['item' => $this->item]), validInventoryPayload())
        ->assertRedirect($this->listUrl)
        ->assertSessionHas('success');

    expect($this->item->fresh())
        ->name->toBe('Timolol 0.5%')
        ->booklet_no->toBe('R-101')
        ->qty_in->toBe('30')
        ->qty_out->toBe('10')
        ->balance->toBe('20')
        ->and((string) $this->item->fresh()->date)->toStartWith('2026-11-02');

    $this->actingAs($this->user)
        ->get($this->listUrl)
        ->assertSee('Inventory item &quot;Timolol 0.5%&quot; updated successfully', false);
});

test('invalid inventory edit is rejected and the row is unchanged', function () {
    $this->actingAs($this->user)
        ->from($this->listUrl)
        ->put(route('admin2.inventory.update', ['item' => $this->item]), validInventoryPayload(['name' => '', 'date' => 'not-a-date']))
        ->assertRedirect($this->listUrl)
        ->assertSessionHasErrors(['name', 'date']);

    expect($this->item->fresh()->name)->toBe('Timolol');
});

test('deleting an inventory row removes it and returns to the list with a success message', function () {
    $this->actingAs($this->user)
        ->from($this->listUrl)
        ->delete(route('admin2.inventory.delete', ['item' => $this->item]))
        ->assertRedirect($this->listUrl)
        ->assertSessionHas('success');

    expect(Inventory::find($this->item->id))->toBeNull();
});

test('editing or deleting a missing inventory row returns 404', function () {
    $this->actingAs($this->user)
        ->put(route('admin2.inventory.update', ['item' => 999999]), validInventoryPayload())
        ->assertNotFound();

    $this->actingAs($this->user)
        ->delete(route('admin2.inventory.delete', ['item' => 999999]))
        ->assertNotFound();
});

test('guests cannot edit or delete inventory', function () {
    $this->put(route('admin2.inventory.update', ['item' => $this->item]), validInventoryPayload())
        ->assertRedirect('/login');
    $this->delete(route('admin2.inventory.delete', ['item' => $this->item]))
        ->assertRedirect('/login');

    expect($this->item->fresh()->name)->toBe('Timolol');
});
