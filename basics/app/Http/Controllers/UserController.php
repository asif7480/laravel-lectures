<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function any($name){
        return "Hello from user controller and name is: $name";
        // return view('welcome');
    }
}
