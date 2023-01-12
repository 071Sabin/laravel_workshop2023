<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        
        $x = 1;
        $y = 2;
        $z = 3;

        return view("home", compact('x', 'y', 'z'));

    }
}
