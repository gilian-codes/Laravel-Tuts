<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importing the database class
use Illuminate\Support\Facades\DB;

class QueryBuilder extends Controller
{
    //
    function dboperations()
       {
            // access the data in the members table from the database
            // $users = DB::table('members')->get();
            // view('querybuilder', ['members' => $users]);
            // return DB::table('members')
            // ->where('id',16)
            // ->get(); //returns just the info of id 16

            // or
            // return $user = DB::table('members')->find(21);

            // count function
            // return  DB::table('members')->count();

            // insert
            return  DB::table('members')
            // -> insert(
            //       [
            //           'name'=>'gilian',
            //           'email'=>'gilianenongene@gmail.com',
            //           'address'=>'ub junction'

            //       ]
            //       );

            // update
            // ->where('id' ,18)
            // -> update(
            //     [
            //         'name'=>'gilian',
            //         'email'=>'gilianenongene@gmail.com',
            //         'address'=>'ub junction'

            //     ]
            //     );

                // delete
                ->where('id',19)->delete();

                


       }
}
