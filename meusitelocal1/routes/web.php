<?php

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



Route::get('/aboutme',function(){
   //return 'página about-me em construção!';
    return view('aboutme');
});


Route::get('/trabalhos',function(){
    //return 'página trabalhos em construção!';
    return view('trabalhos');
});


Route::get('/', function () {
    return view('welcome');
});
