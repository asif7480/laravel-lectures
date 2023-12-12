<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function getData(){
        return view('form');
    }

    function postData(Request $request){
        $request->validate(
            [
                'name' => 'required',    
                'email' => 'required|email',    
                'contact' => 'required|numeric',    
                'pass' => 'required|alpha_num|between:4,8',    
            ],
            [
                'name' => 'name insert karo',
            ]
        );

        echo "<pre>";
            print_r($request->all());
        echo "</pre>";
    }
}
