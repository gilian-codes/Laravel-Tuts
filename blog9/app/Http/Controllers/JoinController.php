<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
    //
    function operation(){
        // return DB::table('employee')->get();
        return DB::table('employee')
        ->join('company','employee_id',"=",'company.employee_id')
        // ->select('company.*')
        ->where('employee_id')
        ->get();
        
    }
}
