<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class opticians extends Model
{
    protected $table = 'opticians';

    protected $fillable = [
        'date',
        'patient_name',
        'power',
        'posted_from',
        'card_number',
        'frame_type',
        'qty',
    ];
}
