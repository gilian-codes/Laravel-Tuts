<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import class for blade template
use Illuminate\Support\Facades\Blade;

class Products extends Controller
{
    //
    function productList(){
        $totalProduct=20;
        //return inline blade template
        return Blade::render('<h1>{{$total}} Product List </h1>',['total'=>$totalProduct]);
        // return "product list";
    }

    function addProduct(){
        return "product is added";
    }

    function updateProduct(){
        return "product is updated";
    }
}
