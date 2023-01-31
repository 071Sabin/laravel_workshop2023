<?php

namespace App\Http\Controllers\admin;

use App\Models\video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

//this code is already outside 'admin' folder with 'videoController.php'. write anything that admin can control over the user uploaded files.

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

        $thumb_file = $request->file('thumb')->store("thumbs");
        $video_file = $request->file('video_file')->store("videos");
        // echo $x1 . "<Br>" . $x2;

        $v = new video();

        $v->category_id = $request->category;
        $v->user_id = Auth::guard('user')->user()->id;
        $v->title = $request->title;
        $v->description = $request->description;
        $v->thumb = $thumb_file;
        $v->video_file = $video_file;

        $v->save();

        $request->session()->flash("Upload_process_done", true);
        return redirect()->route("site.video.upload");

    }
}