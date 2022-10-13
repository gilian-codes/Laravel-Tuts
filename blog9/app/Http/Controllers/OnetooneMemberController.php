<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class OnetooneMemberController extends Controller
{
    //
    function getCompany(){
        return Member::find(18)->getCompany;
    }
}
