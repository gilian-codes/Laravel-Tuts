<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps=false; //save data in the databse

    // accessor
    // changes the first letter of the users to capital letters
    public function getNameAttribute($value){
        return ucfirst($value);
    }

    // enables you to change the address of the users
    // public function getAddressAttribute($value){
    //     return ($value).', india';
    // }

    // MUTATOR
    // we want to make it in such a way that theere will 
    // be mr infront of john(mutatorcntroller) and india in his address
    public function setNameAttribute($value){
        $this->attributes['name'] =" Mr ".$value;
    }

    public function setAddressAttribute($value){
        $this->attributes['address'] = $value.". India";
    }

    // ONE TO ONE
    public function getCompany(){
        return $this->hasOne ('App\Models\Company');
    }
}
