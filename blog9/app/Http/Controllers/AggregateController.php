<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;   
// DB allows you to perform an operation on the database
class AggregateController extends Controller
{
    //
    function operation(){
        // return  DB::table('members')->get();  //this line needs to be there always 
        // return  DB::table('members')->avg('id'); //to get the average of the id
        // return  DB::table('members')->sum('id');
        // return  DB::table('members')->min('id');
        // return  DB::table('members')->count();

        // return  DB::table('members')->min('name');

        // returns both the max and min 
        $min = DB::table('members')->min('id');
        $max = DB::table('members')->max('id');
        return "min - ".$min." max - ".$max;

    }
}
