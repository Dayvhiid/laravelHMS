<?php

use App\Models\Drug;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->drug = Drug::create(['name' => 'Timolol', 'price' => 1500, 'drug_type' => 'Drops', 'quantity' => 10]);
});

test('drug list rows submit their own update form', function () {
    $this->actingAs($this->user)
        ->get(route('doctors.list'))
        ->assertOk()
        ->assertSee('id="update-drug-'.$this->drug->id.'"', false)
        ->assertSee('form="update-drug-'.$this->drug->id.'"', false)
        ->assertSee(route('doctors.update', ['drugs' => $this->drug]), false);
});

test('editing a row on the drug list updates it and returns to the list with a success message', function () {
    $listUrl = route('doctors.list', ['page' => 1]);

    $this->actingAs($this->user)
        ->from($listUrl)
        ->put(route('doctors.update', ['drugs' => $this->drug]), [
            'name' => 'Timolol 0.5%',
            'price' => 2000,
            'drug_type' => 'Eye drops',
            'quantity' => 25,
        ])
        ->assertRedirect($listUrl)
        ->assertSessionHas('success');

    expect($this->drug->fresh())
        ->name->toBe('Timolol 0.5%')
        ->drug_type->toBe('Eye drops')
        ->and((float) $this->drug->fresh()->price)->toBe(2000.0)
        ->and((int) $this->drug->fresh()->quantity)->toBe(25);

    $this->actingAs($this->user)
        ->get($listUrl)
        ->assertSee('Drug &quot;Timolol 0.5%&quot; updated successfully', false);
});

test('invalid drug update is rejected and the drug is unchanged', function () {
    $listUrl = route('doctors.list');

    $this->actingAs($this->user)
        ->from($listUrl)
        ->put(route('doctors.update', ['drugs' => $this->drug]), [
            'name' => '',
            'price' => 'abc',
            'drug_type' => 'Drops',
            'quantity' => 10,
        ])
        ->assertRedirect($listUrl)
        ->assertSessionHasErrors(['name', 'price']);

    expect($this->drug->fresh()->name)->toBe('Timolol');
});

test('drug edit link opens the edit form instead of saving', function () {
    $this->actingAs($this->user)
        ->get(route('drugs.edit', ['drugs' => $this->drug]))
        ->assertOk()
        ->assertSee('Update Drug')
        ->assertSee('name="drug_type"', false)
        ->assertSee('name="quantity"', false);

    expect($this->drug->fresh()->name)->toBe('Timolol');
});
