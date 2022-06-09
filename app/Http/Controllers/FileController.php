<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Owenoj\LaravelGetId3\GetId3;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('file', compact('files'));
    }

    public function store(Request $request)
    {
        $data = new File();
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $size = $request->file->getSize();
        $detail_image = getimagesize($file);
        $format = $file->getClientOriginalExtension();


        if (in_array($format, ["txt", "pdf", "pptx", "docx", "xlsx"])) {
            $file_path = $request->file->move('asset/file');
            $name = $request->file->getClientOriginalName();
            $dimension_file = $format . '_' . $size;

            $data->file = $filename;
            $data->file_path = $file_path;
            $data->size = $size;
            $data->format = $format;
            $data->dimension = $dimension_file;
            $data->name = $name;
        }

        elseif (in_array($format, ["mp4", "mpeg"])) {
            $file_path = $request->file->storeAs('public/video' , $filename);
            $name = $request->file->getClientOriginalName();


            $detail = GetId3::fromUploadedFile($file);
            $info = $detail->extractInfo();
            $video_info = $info['video'];
            $get_video_path =asset('storage/video') . '/' . $filename;
            $width = $video_info["resolution_x"];
            $height = $video_info["resolution_y"];
            $dimension_video = $width . ' * ' . $height;


            $data->file = $filename;
            $data->file_path = $get_video_path;
            $data->name = $name;
            $data->size = $size;
            $data->dimension = $dimension_video;
            $data->format = $format;
        }

        elseif (in_array($format, ["jpg", "jpeg", "svg", "png", "gif"])) {
            $name = $request->file->getClientOriginalName();
            $file_path = $request->file->move('asset/image');

            $width = $detail_image[0];
            $height = $detail_image[1];

            $dimension_image = $width . ' * ' . $height;

            $data->file = $filename;
            $data->file_path = $file_path;
            $data->name = $name;
            $data->size = $size;
            $data->format = $format;
            $data->dimension = $dimension_image;
        }


        $data->save();

        return redirect()->back();
    }

}
