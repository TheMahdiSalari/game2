<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Video;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UploadImageController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('image', compact('photos'));
    }

    public function save(Request $request)
    {

        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);


        $save = new Photo;
        $name = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();

        if ($extension == 'png'||'jpg'||'jpeg' || 'gif' || 'svg') {
            $path = $request->file('image')->move('storage');
            $size = $path->getSize();
            $detail = getimagesize($path);
            $width = $detail[0];
            $height = $detail[1];

            $dimension = $width . ' * ' . $height;
        }




        $format = $request->file('image')->guessClientExtension();



        $save->name = $name;
        $save->path = $path;
        $save->size = $size;
        $save->dimension = $dimension;
        $save->format = $format;

        $save->save();

        return redirect('upload-image')->with('status', 'Image Has been uploaded');

    }
}
