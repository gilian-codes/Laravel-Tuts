<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Products;
use App\Http\Controllers\UserAuth; //import the database class
// import the addmember controller
use App\Http\Controllers\AddMember;
// import the upload constroller
use App\Http\Controllers\UploadController;
//import the member controller
// use App\Http\Controllers\MemberController;
//import the controller  called member 
use App\Http\Controllers\Members;
//import the controller  called savecontroller 
use App\Http\Controllers\SaveController;
// importing the members controller
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\App;
use App\Models\Member;

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
    // Route::view('contact', 'contact');

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
// Route::view("users", "users");
// Route::view("home", "home");
// Route::view("noaccess", "noaccess");

    // group
    // to check the age of the users and home routes
    //  Route::group(['middleware' =>['protectedPage']], function(){  //protectedPage is the middleware name
            
    //         Route::view('home', 'home');

    //   });

      //Route 
    //   Route::view('home', 'home');
    //   Route::view('users', 'users')->middleware('protectedPage');
    //   Route::view('noaccess', 'noaccess');

//database
// Route::get('users',[UserController::class,'index']);
// Route::view('users', 'users');

// model
// Route::get('users',[UserController::class,'getInfo']);

//HTTP CLIENT
//creating a path
// Route::get('users',[UserController::class,'INFO']);

//HTTP REQUEST
// Route::post("users",[UserController::class ,'testRequest']); 
// Route::view("login", "users");


// session
// Route::post("user", [UserAuth::class, 'userLogin']);
// Route::view("login", "login");
// Route::view("profile", "profile");

// redirects the user to the login page if the user types login in the url
// Route::get('/login', function(){
//     if(session()->has('user')){
//         return redirect('profile');
//     }
//     return view('login ');
// });


// Route::get('/logout', function(){
//     if(session()->has('user')){
//         session()->pull('user');
//     }
//     return redirect('login');
// });

// FLASH SESSION
// Route::view("add", "add");
// defining a route for it
// Route::post("addmember",[AddMember::class, 'add']);

// FILE UPLOAD
// Route::post("upload",[UploadController::class ,'index']); 
// Route::view("upload", "upload");

// LOCALIZATION
// Route::get('/profile{lang}',function($lang){
//     App::setLocale($lang);
//     return view('profile');
// });
// Route::view("profile", "profile");

// HOW TO GET DATA FROM THE DATABASE TABLE 
// Route::get('list',[MemberController::class,'show']);

// LARAVEL PAGINATION
// Route::get('list',[Members::class,'show']);

// SAVE DATA IN THE DATABASE
// Route::view("save", "save");
// Route::post("save",[SaveController::class ,'addData']); 

// DELETING FROM A DATABASE
Route::get('list',[MemberController::class,'list']);
    // making a delete route
    Route::get('delete/{id}',[MemberController::class,'delete']);
    Route::get('update/{id}',[MemberController::class,'updateData']);
    Route::post('edit/',[MemberController::class,'update']);  //this update  differs
    

   



