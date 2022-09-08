<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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
    Route::get("users/{user}",[Users::class,'index']);

Route::get('/', function () {
    return view('welcome');
 });


