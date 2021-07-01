<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "wrong password";           
        }
        else {
            $req->session()->put('user',$user);
            return redirect('/');

        }
    }

    function Reg (Request $req)
    {
        //return $req->input();

        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();

        return redirect('/login');
    }
}
