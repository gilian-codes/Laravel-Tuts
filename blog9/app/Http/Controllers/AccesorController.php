<?php

namespace App\Http\Controllers;
use App\Models\Member;

use Illuminate\Http\Request;

class AccesorController extends Controller
{
    //
    function index(){
        return Member::all();
    }
}
