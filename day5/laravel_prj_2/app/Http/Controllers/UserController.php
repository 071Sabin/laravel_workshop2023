<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function register_process(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
                "phone" => "required|digits:10",
                "email" => "required|email",
                "password" => "required|min:6",
                "password_confirmation" => "required|same:password",
                "profile_pic" => "required|file|mimes:jpg"
            ],
            [
                //"required" => "Hey, you forgot this!"
                "phone.required" => "We need phone to call you back!",
                "phone.digits" => "I dont think this phone will ring!"
            ]
        );

        $profile_pic = $request->file('profile_pic')->store("profile_pics");

        $u = new User();
        $u->name = $request->name;
        $u->phone = $request->phone;
        $u->email = $request->email;
        $u->password = bcrypt($request->password);
        $u->profile_pic = $profile_pic;

        $u->save();

        $request->session()->flash('register_process_done', true);
        return redirect()->route("site.register");
    }

    public function login()
    {
        return view('login');
    }

    public function login_process(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (
            Auth::guard('user')->attempt([
                "email" => $request->email,
                "password" => $request->password
            ])
        ) {
            // echo "logged in!!";
            return redirect()->route('site.home');

        } else {

            return back()->withErrors("Invalid Email or Password!!");

        }
    }

    public function UserLogout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('site.home');

    }

}