<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FentiController;
use App\Http\Controllers\Backend\DashboardController;

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

Route::get('/hello',function() {
	return 'Hello World' ;
});

Route::get('/belajar', function (){
	echo '<h1>Hellow World</h1>';
	echo '<p>Sedang Belajar Laravel</p>';
});

Route::get('page/{nomor}', function($nomor){
	return 'Ini Halaman ke-' . $nomor;
});

Route::get('/gambar1', function(){
	return view('gambar1');
});

Route::get('/user', 'DetailProfileController@index');

Route::resource('user', 'DetailProfileController');

Route::resource('home', FentiController::class);
Route::resource('dashboard', DashboardController::class);