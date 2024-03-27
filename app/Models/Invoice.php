<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $casts = [
        'price' => 'array',
        'name' => 'array',
        'qty' => 'array'
    ];

    protected $fillable = [
        'pid',
        'discount'
    ];
}
