<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getData(){
        return view('form');
    }

    public function postData(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required'
            ]
    );
        print_r($request->all());
        // print_r($request->input());
    }
}
