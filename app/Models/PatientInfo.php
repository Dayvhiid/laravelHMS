<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInfo extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'occupation',
        'phone',
        'email',
        'street',
        'state',
        'emergency_phone'
    ];
}
