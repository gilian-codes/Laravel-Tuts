<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //upload
    function index( Request $req)
    {
        return $req->file('file')->store('docs');
        // return"hello from controller";
    }
}
