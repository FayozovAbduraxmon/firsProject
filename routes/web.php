<?php

use App\Http\Controllers\UserController;
use App\Models\Laptops;
use App\Models\Animals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::view('/foods', 'index');

Route::view('/laptop2', 'laptops2');
Route::view('/laptop', 'laptops');

Route::get('/', [UserController::class, 'main_page']);


Route::post('/Animals', function (Request $req) {
   Animals::create([
      'name' => $req->name,
      'type' => $req->type,
      'color' => $req->color,


   ]);

   return back();
});



Route::get('/laptop', function () {
   return view('laptops', ['laptops' => Laptops::all()]);
});


Route::post('/save_laptop', function (Request $req) {
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
});

Route::get('/edit{id}', function ($id) {
   return view('edit', ['user' => Laptops::all()]);
});


Route::post('/Animals/{id}', function ($id, Request $request) {
   Animals::where('id', '=', $id)->first()->update([
      'name' => $request->name,
      'type' => $request->age,
      'color' => $request->color,
   ]);
   return redirect()->route('/');
});


Route::view('/edit_animals/{id}', 'edit');



