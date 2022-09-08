<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //make function in controller
    public function index($user){
        echo $user;
        echo " Hello from controller";
        //in the case where we want to review it as an api
        return['name'=>"anyname",'age'=>70];
    }
}
