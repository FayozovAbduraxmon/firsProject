<?php


use App\Models\Foods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::view('/foods','index');

Route::get('',function (){
  return view('foods',['foods' =>foods::all()]);
});


Route::post('/foods',function (Request $req) {
   foods::create([ 
      'name' => $req->name,
      'type' => $req->type,
      'color' => $req->color,
   
      
   ]);
   
   
   return 'gulom';
   
     
   
   });