<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageUpload extends Controller
{
    //
    function index(){
        return view('image.image');
    }
   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');

        // Option 1: Store image as binary data in database
        $imageData = file_get_contents($image->getRealPath());
        $imageModel = Image::create([
            'title' => $request->input('title'),
            'image_data' => $imageData,
        ]);
        return redirect(route('pages.status'))->with('success', 'Case File Updated Succesfully');
    }

            public function display() {
              $images = Image::all();
            return view('image.image_list', compact('images'));
        }
        public function search()
        {
            return view('image.image_search');
        }
        
        // public function searchResult(Request $request)
        // {
        //     $request->validate([
        //         'name' => 'required|string|max:255',
        //     ]);
        
        //     $image = Image::where('title', $request->input('name'))->first();
        
        //     if ($image) {
        //         return view('image.image_display', compact('image'));
        //     } else {
        //         return back()->with('error', 'No image found with that name.');
        //     }
        // }

        public function searchResult(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Retrieve all images that match the title
    $images = Image::where('title', $request->input('name'))->get();

    if ($images->isNotEmpty()) {
        // If there are matching images, pass them to the view
        return view('image.image_display', ['images' => $images, 'name' => $request->input('name')]);
    } else {
        // If no images are found
        return back()->with('error', 'No image found with that name.');
    }
}

            
}
