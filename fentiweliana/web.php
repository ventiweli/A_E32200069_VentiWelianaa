<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\BayuController;
use App\Http\Controllers\Frontend\DashboardController;

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

Route::get('/gambar_april', function(){
	return view('gambar_april');
});

Route::get('/user', 'DetailProfileController@index');

Route::resource('user', 'DetailProfileController');

Route::get("/home", function(){
	return view("homepage");
});

Route::group(['namespace' => 'Frontend'], function()
{
	Route::resource('home', 'HomeController');
});

Route::group(['namespace' => 'Backend'], function()
{
	Route::resource('dashboard', 'DashboardController');
});