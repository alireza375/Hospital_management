<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function AllUser(){
    //database theke latest data ta get ar madhome receive krtise and compactact kre data pathai disse.
    // $users = User::all();
    $users = User::where('role','user')->get();
    return view('backend.all_user', compact('users'));
    } 
    // End All Teacher Method 
    
    
}
