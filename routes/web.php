<?php

use Illuminate\Support\Facades\Route;
use App\Mail\Testmail;

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

Route::get('/testmail',function(){
	Mail::to('davidguilarte7@gmail.com')->send(new Testmail());
	dd('mail sent');
});

Route::get('/', function () {
  return view('profile');
});

Route::resource('/stores', 'StoreController');