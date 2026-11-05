<?php

use App\Models\Opticians;
use App\Models\User;

beforeEach(function () {
    $this->user = User::factory()->create();
});

function opticianRow(array $overrides = []): array
{
    return array_merge([
        'date' => '2026-11-05',
        'patient_name' => 'Ada Okafor',
        'power' => "R: -1.25 / -0.50 x 180\nL: -1.00 / -0.25 x 175\nAdd: +2.00",
        'posted_from' => "Dr. Bello\nEye clinic, ward 2",
        'card_number' => '413/07/2026',
        'frame_type' => "Aviator Silver\nMetal, size 54",
        'qty' => '1',
    ], $overrides);
}

test('the records form uses growing multi-line boxes for power, posted from and frame type', function () {
    $this->actingAs($this->user)
        ->get(route('optician.records'))
        ->assertOk()
        ->assertSee('<textarea name="patients[0][power]"', false)
        ->assertSee('<textarea name="patients[0][posted_from]"', false)
        ->assertSee('<textarea name="patients[0][frame_type]"', false)
        ->assertSee('js-autogrow', false)
        ->assertSee('name="patients[0][patient_name]"', false);
});

test('multi-line text is saved with its line breaks', function () {
    $this->actingAs($this->user)
        ->from(route('optician.records'))
        ->post(route('optician.store'), ['patients' => [opticianRow()]])
        ->assertSessionHasNoErrors()
        ->assertSessionHas('success');

    $record = Opticians::sole();
    expect($record->power)->toBe("R: -1.25 / -0.50 x 180\nL: -1.00 / -0.25 x 175\nAdd: +2.00")
        ->and($record->posted_from)->toBe("Dr. Bello\nEye clinic, ward 2")
        ->and($record->frame_type)->toBe("Aviator Silver\nMetal, size 54");
});

test('longer multi-line text up to 255 characters is accepted', function () {
    $long = str_repeat("Line of notes\n", 18); // 252 characters

    $this->actingAs($this->user)
        ->post(route('optician.store'), ['patients' => [opticianRow(['power' => $long, 'frame_type' => $long])]])
        ->assertSessionHasNoErrors();

    // Laravel trims the trailing line break; every line inside is kept.
    expect(Opticians::sole()->power)->toBe(rtrim($long))
        ->and(substr_count(Opticians::sole()->power, "\n"))->toBe(17);
});

test('text over the limit is rejected with a clear message and the typed text is kept', function () {
    $tooLong = str_repeat('x', 256);

    $this->actingAs($this->user)
        ->from(route('optician.records'))
        ->post(route('optician.store'), ['patients' => [opticianRow(['frame_type' => $tooLong])]])
        ->assertRedirect(route('optician.records'))
        ->assertSessionHasErrors('patients.0.frame_type');

    expect(Opticians::count())->toBe(0);

    $this->actingAs($this->user)
        ->get(route('optician.records'))
        ->assertSee('Nothing was saved')
        ->assertSee('Row 1: Frame Type can be at most 255 characters.')
        ->assertSee('Dr. Bello');
});

test('saved line breaks are shown on the record list and search results', function () {
    Opticians::create(opticianRow());

    $this->actingAs($this->user)
        ->get(route('optician.list'))
        ->assertOk()
        ->assertSee('whitespace-pre-line', false)
        ->assertSee("Dr. Bello\nEye clinic, ward 2", false);

    // The search action reads $_GET directly, which test requests don't populate.
    $_GET['query'] = '413/07/2026';

    $this->actingAs($this->user)
        ->get(route('optician.search', ['query' => '413/07/2026']))
        ->assertOk()
        ->assertSee('whitespace-pre-line', false)
        ->assertSee("Aviator Silver\nMetal, size 54", false);
});
