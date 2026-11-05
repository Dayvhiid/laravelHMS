<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'frame_id',
        'sn',
        'date',
        'new_stock',
        'name',
        'patient_name',
        'patient_code',
        'receipt_number',
        'qty_in',
        'qty_out',
        'balance',
        'booklet_no',
    ];

    public function frame(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Frame::class);
    }
}
