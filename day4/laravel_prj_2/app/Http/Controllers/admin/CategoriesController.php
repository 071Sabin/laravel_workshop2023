<?php

namespace App\Http\Controllers\admin;

use App\Models\catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function fn_categories()
    {

        $categories = catagory::orderBy("name", "asc")->get();

        return view('admin.adminCategories', compact('categories'));
    }

    public function insert_category(Request $request)
    {

        $request->validate([
            "name" => "required|unique:categories,name"
        ]);

        $c = new catagory();
        $c->name = $request->name;
        $c->save();

    }
}