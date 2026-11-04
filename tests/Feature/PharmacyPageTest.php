<?php

use App\Models\Treat;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
});

test('register patients navbar links to the pharmacy page', function () {
    $this->actingAs($this->user)
        ->get(route('pages.register'))
        ->assertOk()
        ->assertSee(route('pharmacy.index'), false)
        ->assertSee('Pharmacy');
});

test('pharmacy search page submits to the pharmacy results', function () {
    $this->actingAs($this->user)
        ->get(route('pharmacy.index'))
        ->assertOk()
        ->assertSee(route('pharmacy.search'), false);
});

test('pharmacy results show only the searched patient treatments and prescription', function () {
    Treat::create(['patient_id' => '413/07/2026', 'dosage' => '1 drop', 'duration' => '1 week', 'remark' => 'Dispense today', 'prescription' => 'Timolol 0.5%', 'single_vision' => json_encode(['single vision tintable'])]);
    Treat::create(['patient_id' => '999/07/2026', 'duration' => '2 weeks', 'remark' => 'Other patient remark']);

    $this->actingAs($this->user)
        ->get(route('pharmacy.search', ['query' => '413/07/2026']))
        ->assertOk()
        ->assertSee('Pharmacy')
        ->assertSee('Dispense today')
        ->assertSee('Timolol 0.5%')
        ->assertSee('single vision tintable')
        ->assertDontSee('Other patient remark');
});

test('pharmacy pages require login', function () {
    $this->get(route('pharmacy.index'))->assertRedirect('/login');
    $this->get(route('pharmacy.search', ['query' => '413/07/2026']))->assertRedirect('/login');
});
