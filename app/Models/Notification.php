<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model {
    use HasFactory;

    const NEW_PATIENT = 'New Patient Registered';
    const RETURNING_PATIENT = 'Returning Patient Checked In';
    const NEW_TREATMENT = 'New Treatment Recorded';

    protected $fillable = [
        'message',
        'patient_name',
        'added_by',
        'pid',
        'treat_id',
    ];

    /** Patient arrival notifications only (new and returning patients), as shown to doctors. */
    public function scopePatientArrivals(Builder $query): Builder
    {
        return $query->where('message', '!=', self::NEW_TREATMENT);
    }

    public function isTreatment(): bool
    {
        return $this->message === self::NEW_TREATMENT;
    }

    /** Link to the patient's treatment page, scrolled to and highlighting this treatment. */
    public function treatmentUrl(): ?string
    {
        if (! $this->isTreatment() || ! $this->pid) {
            return null;
        }

        $url = route('search.get', array_filter(['query' => $this->pid, 'treatment' => $this->treat_id]));

        return $this->treat_id ? $url.'#treatment-'.$this->treat_id : $url;
    }
}
