<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    //
    function userLogin(Request $req){
        // return $req->input();
        // how to save the data which the user input in the session
        $data = $req->input();
        $req->session()->put('user',$data['user']);
        // echo session('user');
        return redirect('profile');
    }
}
