<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importing the model
use App\Models\User;
use Illuminate\Support\Facades\DB;
// importing the http client
use Illuminate\Support\Facades\Http;

//this is the controller i created

class UserController extends Controller
{
    //
    // function viewLoad(){
    //     return view('users',['USERS'=>['gilian','favour','daniel']]);
    // }

    // function viewLoad(){
    //     // how to use the for each loop
    //        $data=['peter','daniel','favour','leon'];
    //        return view('users',['USERS'=>$data]);
    // }

    // html form 
    // function getData(){
    //     return "Form data will be here";
    // }
    // get data from the html form to the laravel controller
//     public function getData(Request $req)
// {
//     $validated = $req->validate([
//         'username' => 'required|max:30',
//         'userpassword' => 'required|min:8',
//         'email' => 'required ',
//     ]);
//         return $req->input();
//     } 

    // connecting to the database
    // function index(){
    //     //    echo "from friend user controller";
    //     return DB::select("select * from users ");
    // }

    // model
    // function getInfo(){
    //     return User::all();  //fetches all the data from the users table in the database
    // }

    //http client
    // function INFO(){
    //     $collection= http::get("https://reqres.in/api/users?page=1");
    //     return view('users',['collection'=>$collection['data']]);
    //     // return" API DATA WILL BE HERE";
    // }

    // http request
    function testRequest(Request $req){
        // return"hello from controller";
        return $req->input();
    }
}
