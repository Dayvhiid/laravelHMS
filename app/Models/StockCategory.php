<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

/**
 * One optician stock card. Its records carry a running balance.
 */
class StockCategory extends Model
{
    protected $fillable = ['name'];

    public function records(): HasMany
    {
        return $this->hasMany(StockRecord::class);
    }

    /** Records in stock-card order: by date, then in the order they were entered. */
    public function orderedRecords(): HasMany
    {
        return $this->records()->orderBy('date')->orderBy('id');
    }

    public function currentBalance(): int
    {
        return (int) ($this->orderedRecords()->reorder()->orderByDesc('date')->orderByDesc('id')->value('balance') ?? 0);
    }

    /**
     * Recalculate every record's running balance in this category, in stock-card order.
     * Call inside a transaction after adding, editing or deleting a record.
     */
    public function recalculateBalances(): void
    {
        DB::transaction(function () {
            // Lock the category so two people saving at once can't interleave their recalculations.
            static::whereKey($this->getKey())->lockForUpdate()->first();

            $balance = 0;
            foreach ($this->orderedRecords()->get(['id', 'qty_in', 'qty_out', 'balance']) as $record) {
                $balance += (int) $record->qty_in - (int) $record->qty_out;
                if ((int) $record->balance !== $balance) {
                    StockRecord::whereKey($record->id)->update(['balance' => $balance]);
                }
            }
        });
    }

    public function scopeWithSummary(Builder $query): Builder
    {
        return $query->withCount('records')->withMax('records', 'updated_at');
    }
}
