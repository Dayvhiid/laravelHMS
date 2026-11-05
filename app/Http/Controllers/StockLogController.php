<?php

namespace App\Http\Controllers;

use App\Models\Frame;
use App\Models\StockMovement;
use Illuminate\Http\Request;

class StockLogController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->validate([
            'frame_id' => 'nullable|integer',
            'from' => 'nullable|date',
            'to' => 'nullable|date',
        ]);

        $movements = StockMovement::query()
            ->when($filters['frame_id'] ?? null, fn ($q, $frameId) => $q->where('frame_id', $frameId))
            ->when($filters['from'] ?? null, fn ($q, $from) => $q->whereDate('created_at', '>=', $from))
            ->when($filters['to'] ?? null, fn ($q, $to) => $q->whereDate('created_at', '<=', $to))
            ->orderByDesc('created_at')
            ->orderByDesc('id')
            ->paginate(25)
            ->withQueryString();

        $frames = Frame::orderBy('name')->get(['id', 'name', 'special_code', 'quantity']);
        $selectedFrame = isset($filters['frame_id']) ? $frames->firstWhere('id', (int) $filters['frame_id']) : null;

        return view('admin.admin2.stocklog', compact('movements', 'frames', 'selectedFrame', 'filters'));
    }
}
