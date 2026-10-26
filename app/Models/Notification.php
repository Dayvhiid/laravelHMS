<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model {
    use HasFactory;

    const NEW_PATIENT = 'New Patient Registered';
    const RETURNING_PATIENT = 'Returning Patient Checked In';

    protected $fillable = [
        'message',
        'patient_name',
        'added_by',
        'pid',
    ];
}