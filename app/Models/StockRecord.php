<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockRecord extends Model
{
    protected $fillable = [
        'stock_category_id',
        'date',
        'new_stock',
        'name',
        'patient_code',
        'booklet_no',
        'qty_in',
        'qty_out',
        'balance',
        'recorded_by',
    ];

    protected $casts = [
        'date' => 'date',
        'qty_in' => 'integer',
        'qty_out' => 'integer',
        'balance' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(StockCategory::class, 'stock_category_id');
    }
}
