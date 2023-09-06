<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek1;
use App\Http\Controllers\Web;


Route::get('/', function () {
    return view('welcome');
});
//Route::get('/deneme',function(){return view('ornek');});
//Route::get("/phprami/{isim}",[Ornek1::class,'sayHello']);
Route::get("/web",[Web::class,'site']);
