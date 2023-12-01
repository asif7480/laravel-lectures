<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/user', function(){
//     return view('user');
// });

// redirection

Route::get('/user', function(){
    // return view('user');
    return redirect('welcome');
});

// Route::get('/admin', function(){
//     return view('admin');
// });

Route::view('/admin', 'admin');

// passing data to route

Route::get('/admin/{id}', function($id){
    return view('admin', ['id'=>$id]);
});

// calling the user controller
Route::get('/user/{name}', [UserController::class, 'any']);