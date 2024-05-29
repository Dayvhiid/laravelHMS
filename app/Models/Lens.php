<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lens extends Model
{
    use HasFactory;
    protected $fillable = [
        'sn',
        'name',
        'price',
        'special_code',
        'drug_type',
        'quantity',
    ];
}
