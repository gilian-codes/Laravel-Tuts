<?php

namespace App\Http\Controllers;
// import member name
use App\Models\Member;

use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnValueMap;

class MemberController extends Controller
{
    //
//     function show(){
//         $data= Member::all();
//         return view('list',['members'=>$data]);
//     }

    //  FUNCTION FOR DELETING A DATABASE
    function list(){
        $data=Member::all();
        return  view('list',['members'=>$data]);
      
    }

    function delete($id){
        $data=Member::find($id);
        $data->delete();
        // return redirect('list');
        redirect()->back()->with('message',"Item successfully deleted");
        return redirect('list');
    }

    // UPDATE
    function updateData($id){
        $data=Member::find($id);
        return view('update',['data'=>$data]);
    }

    function update(Request $req){
        $data=Member::find($req->id);
        // return $req->input();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect ('list');
    }
}
