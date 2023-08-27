<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getdataController extends Controller
{
    function getdatauser(Request $req){
        echo $req->input('name');
        $req->file('file')->store('public');
        print_r($req->input());
    }
}
