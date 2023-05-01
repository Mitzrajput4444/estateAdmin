<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\admin\adminindex;
use App\Http\Controllers\Client\ClientController;

use GuzzleHttp\Client;

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
   route::get('/home',[ClientController::class,'home'])->name('home');
   route::get('/about',[ClientController::class,'about'])->name('about');
   route::get('/agent',[ClientController::class,'agent'])->name('agent');
   route::get('/blog',[ClientController::class,'blog'])->name('blog');
   route::get('/contact',[ClientController::class,'contact'])->name('contact');
   route::get('/buysalerent',[ClientController::class,'buysalerent'])->name('buysalerent');
