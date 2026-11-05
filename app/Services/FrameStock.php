<?php

namespace App\Services;

use App\Models\Frame;
use App\Models\StockMovement;
use Illuminate\Support\Facades\DB;

/**
 * The single place that changes a frame's quantity. Every change is written to the stock log
 * in the same transaction, so the log's "balance after" always matches the frame's quantity.
 *
 * $details may contain: reference, note, inventory_id, patient_name, patient_code.
 */
class FrameStock
{
    private const DETAIL_KEYS = ['reference', 'note', 'inventory_id', 'patient_name', 'patient_code'];

    /**
     * Add $in and remove $out from a frame's stock, and log it.
     */
    public static function adjust(Frame $frame, int $in, int $out, string $type, array $details = []): StockMovement
    {
        // A negative amount on one side is the same as a positive amount on the other.
        if ($in < 0) {
            [$out, $in] = [$out - $in, 0];
        }
        if ($out < 0) {
            [$in, $out] = [$in - $out, 0];
        }

        return DB::transaction(function () use ($frame, $in, $out, $type, $details) {
            $locked = Frame::whereKey($frame->getKey())->lockForUpdate()->firstOrFail();
            $locked->quantity = (int) $locked->quantity + $in - $out;
            $locked->save();

            $frame->setRawAttributes($locked->getAttributes(), true);

            return self::log($locked, $in, $out, $type, $details);
        });
    }

    /**
     * Log a frame quantity that has already been set directly (frame list edit, new frame).
     */
    public static function recordSetQuantity(Frame $frame, int $oldQuantity, string $type, array $details = []): ?StockMovement
    {
        $difference = (int) $frame->quantity - $oldQuantity;

        if ($difference === 0 && $type !== StockMovement::OPENING) {
            return null;
        }

        return self::log($frame, max($difference, 0), max(-$difference, 0), $type, $details);
    }

    private static function log(Frame $frame, int $in, int $out, string $type, array $details): StockMovement
    {
        $user = auth()->user();
        $details = array_map(
            fn ($value) => is_string($value) && trim($value) === '' ? null : $value,
            array_intersect_key($details, array_flip(self::DETAIL_KEYS)),
        );

        return StockMovement::create($details + [
            'frame_id' => $frame->id,
            'item_name' => $frame->name,
            'item_type' => $frame->special_code,
            'type' => $type,
            'qty_in' => $in,
            'qty_out' => $out,
            'balance_after' => (int) $frame->quantity,
            'user_id' => $user?->id,
            'user_name' => $user?->name,
        ]);
    }
}
