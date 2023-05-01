<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\admin\adminindex;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/index',function(){
    return view('adminindex');
   });
   route::get('/mainsection',function(){
    return view('allpage.section');
   });
// ---------------------------Clientside-------------------------
route::get('/home',function(){
    return view('client.clientindex');
   });