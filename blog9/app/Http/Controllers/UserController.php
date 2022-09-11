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
        // how to use the for each loop
           $data=['peter','daniel','favour','leon'];
           return view('users',['USERS'=>$data]);
    }
}
