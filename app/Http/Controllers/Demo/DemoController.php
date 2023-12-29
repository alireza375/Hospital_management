<?php

namespace App\Http\Controllers\Demo;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    


    public function HomeMain(){
        $doctors = Doctor::all();
        return view('frontend.index', compact('doctors'));
    }// end mehtod 


    public function dashboard(){
        return view('dashboard');
    }

}
