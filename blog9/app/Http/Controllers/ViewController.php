<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    // calling the view from the controller
    function loadView($name)
    {
        return view("users",['name'=>$name]);
    }
}
