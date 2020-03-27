<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function listStudent(){
        $student = Student::all();
        return view("listStudent",['student'=>$student]);
    }

    public function addStudent(){
        return view("addStudent");
    }
}
