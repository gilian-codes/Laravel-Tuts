<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\DB
use App\Models\Member;

class MutatorController extends Controller
{
    //
    function index(){
    //   return Member::all();
    $member =new Member;
    $member ->name="john";
    $member ->email="john@gmail.com";
    $member ->address="douala";
    $member ->save();
    }
}
