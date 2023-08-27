<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\blog;

class dbController extends Controller
{
    //
    function index(){
        // echo "<pre>";
        // print_r(DB::select("select * from blog"));
        // print_r(blog::all());
        // echo "</pre>";

        return view('data',[
            'users'=>blog::all()
        ]);
    }
}
