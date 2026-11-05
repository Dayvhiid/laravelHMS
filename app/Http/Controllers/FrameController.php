<?php

namespace App\Http\Controllers;

use App\Models\Frame;
use App\Models\StockMovement;
use App\Services\FrameStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrameController extends Controller
{
    public function index(){
        return view('frame.frame');
    }
    public function store(Request $request){
        $request->validate([
            // 'inputs.*.sn' => 'required',
            'inputs.*.name' => 'required',
            'inputs.*.price' => 'required',
            // 'inputs.*.special_code' => 'required',
            // 'inputs.*.drug_type' => 'required',
        ]);

        DB::transaction(function () use ($request) {
            foreach($request->inputs as $key => $value){
                $frame = Frame::create($value);
                if ((int) $frame->quantity !== 0) {
                    FrameStock::recordSetQuantity($frame, 0, StockMovement::OPENING, ['note' => 'New frame added']);
                }
            }
        });
        return redirect(route('doctors.status'))->with('msg','Frame List Updated Succesfully'); 
        // return redirect(route('frame.list'));
    }

    public function list(){
        $frames = Frame::paginate(9);
        return view('frame.framelist', [ 'frames' => $frames]);
    }
    public function edit(Frame $frames){
         return view('frame.edit', ['frames' => $frames]);
    }
    public function update(Frame $frames, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required|integer',
        ]);
        DB::transaction(function () use ($frames, $data) {
            $oldQuantity = (int) $frames->quantity;
            $frames->update($data);
            FrameStock::recordSetQuantity($frames, $oldQuantity, StockMovement::ADJUSTMENT, ['note' => 'Quantity changed on the frame list']);
        });
        return redirect(route('frame.list'));
    }
    public function delete($frames){
        $frame = Frame::find($frames);
        $frame->delete();
        // return redirect(route('pages.status'))->with('success', 'Frame deleted Sucesfully');
        return redirect(route('frame.list'));
    }    
}

