<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treat extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'dosage', // Add 'dosage' to the $fillable array
        'duration',
        'tab',
        'gutt',
        'oc',
        'sur',
        'rtc',
        'remark',
        'single_vision',
        'bifocal',
        'special_order',
        'progressive',
        'prescription', 
    ];
}
