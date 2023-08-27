<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function user(){
        return view('welcome');
    }

    function login(Request $req){
        $req->session()->put('user','dhruval');
        return view('profile');
    }
    function logout(Request $req){
        $req->session()->put('user','');
        return view('profile');
    }
}
