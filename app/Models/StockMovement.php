<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockMovement extends Model
{
    public const OPENING = 'opening';
    public const STOCK_ENTRY = 'stock_entry';
    public const SALE = 'sale';
    public const ADJUSTMENT = 'adjustment';
    public const CORRECTION = 'correction';

    protected $fillable = [
        'frame_id',
        'item_name',
        'item_type',
        'type',
        'qty_in',
        'qty_out',
        'balance_after',
        'patient_name',
        'patient_code',
        'reference',
        'note',
        'inventory_id',
        'user_id',
        'user_name',
    ];

    protected $casts = [
        'qty_in' => 'integer',
        'qty_out' => 'integer',
        'balance_after' => 'integer',
    ];

    public function frame(): BelongsTo
    {
        return $this->belongsTo(Frame::class);
    }

    /** Human-readable description shown in the stock log. */
    public function label(): string
    {
        return match ($this->type) {
            self::OPENING => 'Opening stock',
            self::STOCK_ENTRY => match (true) {
                $this->qty_in > 0 && $this->qty_out === 0 => 'Stock received',
                $this->qty_out > 0 && $this->qty_in === 0 => 'Stock removed',
                default => 'Stock received and removed',
            },
            self::SALE => 'Sold on invoice',
            self::ADJUSTMENT => 'Manual adjustment',
            self::CORRECTION => 'Correction to stock entry',
            default => ucfirst(str_replace('_', ' ', (string) $this->type)),
        };
    }
}
