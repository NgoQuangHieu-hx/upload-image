<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
        // Student::create([
        //     'first_name' => request('first_name'),
        //     'last_name' => request('last_name'),
        //     'email' => request('email'),
        //     'department' => request('department'),
        // ]);
        // dd($request->first_name);

        $student = new Student();
        $student->first_name = request('first_name');
        $student->last_name = request('last_name');
        $student->staff_id = request('staff_id');
        $student->email = request('email');
        $student->department = request('department');
        $student->position = request('position');
        $student->save();
        return view('add');
    }
}
