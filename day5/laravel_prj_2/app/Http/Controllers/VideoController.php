<?php

namespace App\Http\Controllers;

use App\Models\video;
use App\Models\catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class VideoController extends Controller
{
    public function upload()
    {
        // $categories = catagory::orderBy("name", "asc")->get();
        // return view("video_upload", compact('categories'));

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
                "video_file" => "required|file|mimes:mp4|max:5120"
            ]
        );

        $thumb_file = $request->file('thumb')->store('thumbs');
        $video_file = $request->file('video_file')->store("videos");

        $v = new video();

        $v->category_id = $request->category;
        $v->user_id = Auth::guard('user')->user()->id;
        $v->title = $request->title;
        $v->description = $request->description;
        $v->thumb = $thumb_file;
        $v->video_file = $video_file;

        $v->save();

        $request->session()->flash("register_process_done", true);
        return redirect()->route("site.video.upload");
    }
}