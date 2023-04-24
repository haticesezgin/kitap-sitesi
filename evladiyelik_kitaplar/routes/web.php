<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function (){
    return view('website.home');
});
Route::get('/about',function (){
    return view('website.about');
});
Route::get('/contact',function (){
    return view('website.contact');
});
Route::get('/post',function (){
    return view('website.post');
});
Route::get('/category',function (){
    return view('website.category');
});
