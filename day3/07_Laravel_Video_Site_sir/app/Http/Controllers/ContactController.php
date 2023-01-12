<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view("contact");
    }

    public function process(Request $request) {

        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "required|digits:10",
            "subject" => "required",
            "message" => "required|min:30",
        ]);

        echo "ok";

    }
}
