<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\getdataController;
use App\Http\Controllers\dbController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home/{name}', function($name){
    return view('new',[
        'name' => $name
    ]);
});

Route::view('/form','form')->middleware('checkcheck');

Route::post('/getdata', [getdataController::class, 'getdatauser']);

Route::view('noaccess', 'noaccess');

Route::group(['middlware' => 'protectpage'], function() {
    Route::get('/home',function(){
        return 'Hello';
    });
    
    Route::view('home2','/welcome');
    
    Route::get('/home3', [
        userController::class,
        'user'
    ]);
});

Route::get('/dbase',[dbController::class, 'index']);

Route::get('/login', [userController::class, 'login']); 

Route::view('/p1','p1');
Route::view('/p2','p2');

Route::get('/logout', [userController::class, 'logout']); 

