<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class SaveController extends Controller
{
    //
    function addData(Request $req)
    {
        $member = new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('save ');
        // return"hello from controller";
    }
}
