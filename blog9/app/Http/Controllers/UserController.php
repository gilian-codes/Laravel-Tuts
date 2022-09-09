<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//this is the controller i created

class UserController extends Controller
{
    //
    // function viewLoad(){
    //     return view('users',['USERS'=>['gilian','favour','daniel']]);
    // }

    function viewLoad(){
        return view('users',['USER'=>['gilian']]);
    }
}
