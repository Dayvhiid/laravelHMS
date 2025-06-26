<?php

namespace App\Http\Controllers;

use App\Models\Lens;
  use App\Models\Drug;
use App\Models\Frame;
use App\Models\Services;
use Illuminate\Http\Request;

class CombinationController extends Controller
{
  

public function getAllItems()
{
    $drugs = Drug::select('id', 'name', 'price', 'quantity')->get();
    $lenses = Lens::select('id', 'name', 'price', 'quantity')->get();
    $frames = Frame::select('id', 'name', 'price', 'quantity')->get();
    $services = Services::select('id', 'name', 'price')->get();

    // Combine all into one array with a "type" field to identify
    $items = collect();

    foreach ($drugs as $drug) {
        $items->push([
            'id' => $drug->id,
            'label' => $drug->name . ' (Drug)',
            'name' => $drug->name,
            'price' => $drug->price,
            'quantity' => $drug->quantity,
            'type' => 'drug',
        ]);
    }

    foreach ($lenses as $lens) {
        $items->push([
            'id' => $lens->id,
            'label' => $lens->name . ' (Lens)',
            'name' => $lens->name,
            'price' => $lens->price,
            'quantity' => $lens->quantity,
            'type' => 'lens',
        ]);
    }

    foreach ($frames as $frame) {
        $items->push([
            'id' => $frame->id,
            'label' => $frame->name . ' (Frame)',
            'name' => $frame->name,
            'price' => $frame->price,
            'quantity' => $frame->quantity,
            'type' => 'frame',
        ]);
    }

      foreach ($services as $service) {
        $items->push([
            'id' => $service->id,
            'label' => $service->name . ' (Service)',
            'name' => $service->name,
            'price' => $service->price,
            'quantity' => $service->quantity,
            'type' => 'service',
        ]);
    }

    return response()->json($items);
}

}
