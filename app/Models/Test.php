<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $fillable = [
        'sn',
        'date',
        'new_stock',
        'name',
        'patient_code',
        'booklet_no',
        'qty_in',
        'qty_out',
        'balance',
    ];
}
