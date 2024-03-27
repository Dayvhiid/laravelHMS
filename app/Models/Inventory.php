<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'sn',
        'date',
        'new_stock',
        'name',
        'patient_code',
        'receipt_number',
        'qty_in',
        'qty_out',
        'balance',
    ];
}
