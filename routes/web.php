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

Route::get('/' , function(){

  $name = request('name');

  $location = request('location');

  return view('welcome' , compact('name','location'));

});

Route::get('/home' , function(){

  // return "Welcome to homepage";
  return view('homepage');

});

Route::get( '/about' , function(){

  return view('about');

});

Route::get('/contact', function(){

  return view('contact');

});

// Wildcards in URLs

Route::get('/record/{record_num}' , function($record_num){

  return $record_num;

});

Route::get('/record/{record_num}/{record_name}' , function($record_num, $record_name){

  return "Record ".$record_num." belongs to ".$record_name;

});
