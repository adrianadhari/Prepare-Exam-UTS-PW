<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            "title" => "Prepare Exam | About",
            "nama" => "Raynaldi",
            "npm" => 212310069,
            "jeniskelamin" => "Perempuan"
        ]);
    }
}
