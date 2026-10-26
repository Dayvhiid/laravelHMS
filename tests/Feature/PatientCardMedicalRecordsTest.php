<?php

use App\Models\PatientInfo;
use App\Models\Treat;
use App\Models\User;
use App\Models\Vital;

beforeEach(function () {
    $this->user = User::factory()->create();

    $this->patient = new PatientInfo();
    $this->patient->forceFill([
        'patient_id' => '413/07/2026',
        'first_name' => 'Ada',
        'last_name' => 'Obi',
        'date' => '1990-01-01',
        'gender' => 'female',
        'phone' => '08000000000',
        'email' => 'ada@example.com',
        'city' => 'Lagos',
        'state' => 'Lagos',
        'street' => '1 Main St',
        'occupation' => 'Teacher',
        'emergency_fullname' => 'Ben Obi',
        'emergency_relationship' => 'Brother',
        'emergency_phone' => '08000000001',
        'emergency_email' => 'ben@example.com',
    ])->save();
});

test('patient card links to the patient\'s vitals and treatment plans', function () {
    Vital::create(['patient_code' => '413/07/2026'])->forceFill(['created_at' => '2026-03-01 10:00:00'])->save();
    Vital::create(['patient_code' => '413/07/2026'])->forceFill(['created_at' => '2026-10-20 10:00:00'])->save();
    Vital::create(['patient_code' => '999/07/2026']);
    Treat::create(['patient_id' => '413/07/2026', 'duration' => '2 weeks'])->forceFill(['created_at' => '2026-10-21 10:00:00'])->save();

    $this->actingAs($this->user)
        ->get(route('patient.show', $this->patient->id))
        ->assertOk()
        ->assertSee('Medical Records')
        ->assertSee('Vitals (2)')
        ->assertSee('Latest: October 20, 2026')
        ->assertSee('Treatment Plans (1)')
        ->assertSee('Latest: October 21, 2026')
        ->assertSee(route('vitals.get', ['query' => '413/07/2026']), false)
        ->assertSee(route('search.get', ['query' => '413/07/2026']), false);
});

test('patient card shows empty medical records without links', function () {
    $this->actingAs($this->user)
        ->get(route('patient.show', $this->patient->id))
        ->assertOk()
        ->assertSee('Vitals (0)')
        ->assertSee('No vitals recorded')
        ->assertSee('Treatment Plans (0)')
        ->assertSee('No treatment plans recorded')
        ->assertDontSee('View Vitals')
        ->assertDontSee('View Treatment Plan');
});
