<?php

use App\Models\Notification;
use App\Models\PatientInfo;
use App\Models\Treat;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create(['name' => 'Dr. Bello']);

    (new PatientInfo())->forceFill([
        'patient_id' => '413/07/2026', 'fullname' => 'Ada Okafor', 'first_name' => 'Ada', 'last_name' => 'Okafor',
        'date' => '1990-01-01', 'gender' => 'female', 'phone' => '08000000000', 'email' => 'ada@example.com',
        'city' => 'Lagos', 'state' => 'Lagos', 'street' => '1 Main St', 'occupation' => 'Teacher',
        'emergency_fullname' => 'Ben Okafor', 'emergency_relationship' => 'Brother',
        'emergency_phone' => '08000000001', 'emergency_email' => 'ben@example.com',
    ])->save();
});

function recordTreatment($test, string $patientId = '413/07/2026'): Treat
{
    $test->actingAs($test->user)
        ->post(route('treatment.store'), [
            'patient_id' => $patientId,
            'dosage' => '1 drop',
            'duration' => '2 weeks',
            'remark' => 'Review in 2 weeks',
        ])
        ->assertSessionHasNoErrors();

    return Treat::latest('id')->first();
}

test('recording a treatment creates a notification linked to that treatment', function () {
    $treatment = recordTreatment($this);

    $notification = Notification::sole();
    expect($notification->message)->toBe(Notification::NEW_TREATMENT)
        ->and($notification->patient_name)->toBe('Ada Okafor')
        ->and($notification->pid)->toBe('413/07/2026')
        ->and($notification->added_by)->toBe('Dr. Bello')
        ->and($notification->treat_id)->toBe($treatment->id)
        ->and($notification->treatmentUrl())->toBe(
            route('search.get', ['query' => '413/07/2026', 'treatment' => $treatment->id]).'#treatment-'.$treatment->id
        );
});

test('the optician dashboard shows the treatment notification with a link to it', function () {
    $treatment = recordTreatment($this);

    $this->actingAs($this->user)
        ->get(route('optician.index'))
        ->assertOk()
        ->assertSee('New Treatment')
        ->assertSee('Ada Okafor')
        ->assertSee('by Dr. Bello')
        ->assertSee('View treatment')
        ->assertSee(e(Notification::sole()->treatmentUrl()), false)
        ->assertSee('query=413%2F07%2F2026', false)
        ->assertSee('#treatment-'.$treatment->id, false);
});

test('the link opens the patient treatment page with that treatment highlighted', function () {
    $older = recordTreatment($this);
    $newer = recordTreatment($this);

    // The search action reads $_GET directly, which test requests don't populate.
    $_GET['query'] = '413/07/2026';

    $this->actingAs($this->user)
        ->get(route('search.get', ['query' => '413/07/2026', 'treatment' => $newer->id]))
        ->assertOk()
        ->assertSee('id="treatment-'.$older->id.'"', false)
        ->assertSee('id="treatment-'.$newer->id.'" class="border-t border-t-[#dde0e4] scroll-mt-24 bg-amber-50', false)
        ->assertDontSee('id="treatment-'.$older->id.'" class="border-t border-t-[#dde0e4] scroll-mt-24 bg-amber-50', false)
        ->assertSee('New treatment');
});

test('a treatment for an unregistered patient still notifies, using the patient ID as the name', function () {
    recordTreatment($this, 'WALK-IN-7');

    expect(Notification::sole())
        ->patient_name->toBe('WALK-IN-7')
        ->pid->toBe('WALK-IN-7');
});

test('doctors dashboards keep showing only new and returning patients', function () {
    recordTreatment($this);
    Notification::create(['message' => Notification::RETURNING_PATIENT, 'patient_name' => 'Ben Ade', 'added_by' => 'Front desk', 'pid' => '500/07/2026']);

    $this->actingAs($this->user)
        ->get(route('optician.index'))
        ->assertSee('Ada Okafor')
        ->assertSee('Ben Ade');

    expect(Notification::patientArrivals()->pluck('patient_name')->all())->toBe(['Ben Ade']);
});

test('older notifications without a treatment have no treatment link', function () {
    $notification = Notification::create(['message' => Notification::NEW_PATIENT, 'patient_name' => 'Ben Ade', 'added_by' => 'Front desk', 'pid' => '500/07/2026']);

    expect($notification->treatmentUrl())->toBeNull();

    $this->actingAs($this->user)
        ->get(route('optician.index'))
        ->assertSee('Ben Ade')
        ->assertDontSee('View treatment');
});
