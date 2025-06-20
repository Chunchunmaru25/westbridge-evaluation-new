<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function qrcode(){
        return view('student/qrcode');
    }
}
