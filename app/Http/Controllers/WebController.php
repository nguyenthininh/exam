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

    public function studentCreate(){
        return view('form_add_student');
    }

    public function studentStore(Request $request){

        $request->validate([
            "name" => "required|string",
            "age" => "required|numeric",
            "address" => "required|string",
            "telephone" => "required|string"
        ]);
        try {
            Student::create([
                "name" => $request->get("name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone")
            ]);
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->to("/listStudent");
    }
}
