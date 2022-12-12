<?php

namespace App\Http\Controllers;
use App\Models\Bus;
use App\Http\Controllers\SendMailC;
use Illuminate\Http\Request;

class User extends Controller
{
    //
    function Regestration(Request $req)
    {        
        $user = new Bus();
        $user->c_name = $req->c_name;
        $user->c_mail = $req->c_mail;
        $user->c_pass = $req->c_pass;
        $user->c_add = $req->c_add;
        $res = $user->save();
        SendMail();
        return response()->json($res); 

    }
    function Login(Request $req)
    {
        $user = Bus::where('c_mail',$req->c_mail)->where('c_pass',$req->c_pass)->first();

        return response()->json($user);
    }
}