<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        return view('student', [
            "title" => "Prepare Exam | Students",
            "data" => Student::all()
        ]);
    }
}
