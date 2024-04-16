<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vital2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_code',
        'srosphere',
        'sroscyl',
        'srosaxis',
        'srosva',
        'srosadd',
        'srosnva',
        'fossph',
        'foscyl',
        'fosaxis',
        'fosva',
        'fosadd',
        'fosnva',
    ];
}
