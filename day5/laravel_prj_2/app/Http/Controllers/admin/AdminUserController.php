<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function login()
    {
        return view('admin/adminLogin');
    }
    public function login_validation(Request $request)
    {
        $request->validate(
            [
                // these email and password are the name="email" in html forms.
                "email" => "required|email",
                "password" => "required"
            ],
            [
                "email.required" => "Enter a valid email"
            ]
        );
        echo "Success";
    }
}