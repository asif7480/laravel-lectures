<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SingleActionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// controllers without group
// Route::get('/',[UserController::class, 'showHome'])->name('home');
// Route::get('/user',[UserController::class, 'showUser'])->name('user');
// Route::get('/user/{name}',[UserController::class, 'showUserWithName'])->name('userName');

// group of controller
// we can make a group of controllers which contain same class

Route::controller(UserController::class)->group( function(){
    Route::get('/','showHome')->name('home');
    Route::get('/user','showUser')->name('user');
    Route::get('/user/{name}','showUserWithName')->name('userName');
});


// single action controller
Route::get('/singleController', SingleActionController::class);

