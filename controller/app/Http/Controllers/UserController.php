<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showHome(){
        // return "<h1>Welcome to the controller</h1>";
        return view('welcome');
        // return view('user.profile');
    }

    public function showUser(){
        return view('user');
    }
    public function showUserWithName(string $name){
        // return view('userName', ['name'=>$name]);
        // same as above
        return view('userName', compact('name'));
    }
}
