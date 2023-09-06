<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ornek1 extends Controller
{
    function sayHello($isim)
    {
        return view("ornek",["ad"=>$isim]);
    }
}
