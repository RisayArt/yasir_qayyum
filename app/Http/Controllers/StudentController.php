<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function viewStudents(){
        $students = Student::all();
        return view('student-view', compact('students'));
    }

    public function editStudents($id){
        $students = Student::find($id);
        return view('edit-student', compact('students'));
    }
}
