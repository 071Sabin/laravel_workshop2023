<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoUploadController extends Controller
{
    public function upload()
    {
        return view("video_upload");
    }

    public function upload_process(Request $request)
    {
        $request->validate(
            [
                "title" => "required",
                "category" => "required|integer",
                "description" => "required|min:30",
                "thumb" => "required|file|mimes:jpg",
                "video_file" => "required|file|mimes:mp4|max:5555"
            ]
        );

        $x1 = $request->file('thumb')->store("thumbs");
        $x2 = $request->file('video_file')->store("videos");
        echo $x1 . "<Br>" . $x2;

    }
}