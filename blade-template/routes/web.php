<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/basic/{name?}', function($name = null){
    return view('basic', ['name' => $name]);
});

Route::get('/conditional/{value?}', function($value = null){
    return view('conditional', ['value' => $value]);
});

Route::get('/looping/{loopValue?}', function($loopValue = null){
    return view('looping', ['looping' => $loopValue]);
});

Route::get('/layout', function(){
    return view('layout.main');
});


Route::get('/page1', function(){
    return view('page1');
});

Route::get('/page2', function(){
    return view('page2');
});