<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\products;
use App\Http\Controllers\UserAuth; //import the database class
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect("about");

// });

//about page i created 
// Route::get('/about', function(){
//     return view('about');
// });
 
//Another way to perform the above syntax of line 21 is to do
    // Route::view("about","about");

//Route for contact page
    Route::view('contact', 'contact');

//Pass data from routing
// Route::get('/{name}', function ($name) {
//     echo $name;
//     return view('welcome');
// });

//if you want to make that pass your data inside the code itself then do
// Route::get('/{name}', function ($name){
//     return view('welcome',['name'=>$name]);
// });

//Call the controller from the route
// Route::get("users","Users@index");
//  Route::get("users",[Users::class,'index']); //users can be anything

  //to write anything for it to be displayed in the page do
    // Route::get("users/{user}",[Users::class,'index']);

// Route::get('/', function () {
//     return view('welcome');
//  });

//calling view from router
// Route::get("/users/{name}", function($name){
//     return view('users',['name' =>$name]);
// });
     //another way is
        //Route::view("users","users");
//calling the view from controller
// Route::get("users/{name}",[ViewController::class,'loadView']);

// Route::get("users",[UserController::class,'viewLoad']); // an array

// Route::view('list', 'product');

// html form
// Route::post("users",[UserController::class,'getData']);
// Route::view("login", "users");

// MIDDLEWARE
//   global
Route::view("users", "users");
Route::view("home", "home");
Route::view("noaccess", "noaccess");

    // group
    // to check the age of the users and home routes
     Route::group(['middleware' =>['protectedPage']], function(){  //protectedPage is the middleware name
            
            Route::view('home', 'home');

      });

      //Route 
      Route::view('home', 'home');
      Route::view('users', 'users')->middleware('protectedPage');
      Route::view('noaccess', 'noaccess');

//database
// Route::get('users',[UserController::class,'index']);
// Route::view('users', 'users');

// model
// Route::get('users',[UserController::class,'getInfo']);

//HTTP CLIENT
//creating a path
// Route::get('users',[UserController::class,'INFO']);

//HTTP REQUEST
Route::post("users",[UserController::class ,'testRequest']); 
Route::view("login", "users");


// session
// Route::post("user", [UserAuth::class, 'userLogin']);
// Route::view("login", "login");
// Route::view("profile", "profile");

// Route::get('/login', function(){
//     if(session()->has('user')){
//         return redirect('profile');
//     }
//     return view('login');
// });


// Route::get('/logout', function(){
//     if(session()->has('user')){
//         session()->pull('user');
//     }
//     return redirect('login');
// });



