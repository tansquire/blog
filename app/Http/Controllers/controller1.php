<?php

namespace App\Http\Controllers;

use App\model1;
use Illuminate\Http\Request;

class controller1 extends Controller
{
    public function method1()
    {
        $students=model1::all();
        return view('welcome',compact('students'));
    }
}

