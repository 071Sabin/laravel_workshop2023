<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $v = video::find(26);
        echo $v->title . "<Br>";
        echo $v->description . "<Br>";
        echo $v->user->name . "<Br>";
        echo $v->user->phone . "<Br>";
        echo $v->category->name . "<br>";
    }

// $u = User::find(2);
// dd($u->name . " " . $u->email);
// return view('home');

}