<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function process(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "phone" => "required|digits:10",
                "email" => "required|email",
                "subject" => "required|max:15"
            ],
            [
                "phone.required" => "give valid phone number"
            ]
        );
    }
}