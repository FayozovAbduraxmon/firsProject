<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use App\Models\Laptops;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function main_page()
    {
        return view('welcome', ['animals' => Animals::all()]);
    }

    function save_laptop(Request $req)
    {
        $path = '';

        if ($req->file('image')) {
            $req->file('image')->store('public');
            $path = 'storage/' . $req->file('image')->hashName();
        }


        Laptops::create([

            'name' => $req->name,
            'manufakturer' => $req->manufakturer,
            'os' => $req->os,
            'img' => $path,
            'ram' => $req->ram,
            'date' => $req->date,

        ]);

        return back();
    }
}


