<?php

use Illuminate\Support\Facades\Route;

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

// Route::get( 'url' , what we need to do with the url);

Route::get('/', 'HomeController@index')->name('index');

Route::get('/home_page', 'HomeController@home')->name('home');

Route::get('/about_page', 'HomeController@about')->name('about');

Route::get('/contact_page', 'HomeController@contact')->name('contact');

Route::get('/addition/{num1}/{num2}', function($num1, $num2){
  return $num1 + $num2;
});

Route::get('/add/{num1}/{num2}', 'HomeController@add')->name('addition');

Route::get('/blogs', 'HomeController@blogs');
