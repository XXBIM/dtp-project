<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view ('student.index', [
            'students' => Student::get(),
        ]);
    }
    public function edit()
    {
        return view ('student.index'
        );
    }
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $students = new Student();
        $students->name = $request->name;
        $students->address = $request->address;
        $students->phone_number = $request->phone_number;
        $students->class = $request->class;

        $students->save();

        return back();
    }

    
}
