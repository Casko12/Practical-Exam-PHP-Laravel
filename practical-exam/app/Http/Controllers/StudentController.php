<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(){
        $data = Student::all();
        return view("welcome",["data"=> $data]);

    }
    public function createStudent(){
        return view("/create");
    }

    public function create(Request $request){
        $request->validate([
            "name"=>"required|string",
            "age"=>"required|numeric|min:1",
            "address"=>"required|string|",
            "telephone"=>"required|string|min:10",
        ],[
            "required"=>"Please insert required field",
            "string"=>"Please input data",
            "min"=>"Please input :attribute minimum :min",
        ]);
        try {
            $student= Student::create([
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone"),

            ]);
            return redirect()->to("/")->with("success","Add student successful");
        }catch (\Exception $e){}
        return redirect()->back()->with("error","Fail to add student");
    }
}
