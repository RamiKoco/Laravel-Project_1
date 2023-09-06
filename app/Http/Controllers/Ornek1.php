<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Event\ConsoleEvent;

class Ornek1 extends Controller
{
    function sayHello($isim)
    {
        return view("ornek",["ad"=>$isim]);
        //Hello From commit.....
        // What else?
    }
}
