<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactDataController extends Controller
{
    public function contact()
    {
        return view('admin/adminContact');
    }
}