<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importing the model
use App\Models\Student;


class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('index', compact('student'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new Student;
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->contact = $request->input('contact');
        $student->save();

        return redirect('students');
    }
}
