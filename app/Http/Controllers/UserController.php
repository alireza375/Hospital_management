<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function UserDashboard(){
        $id = Auth::user()->id;
        return view('user.index');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $userData = User::where('id', $id)->first();
        return view('user.user_profile_view' ,compact('userData'));
    }

    public function EditProfile(){
        $id = Auth::user()->id;
        $userData = User::where('id', $id)->first();
        return view('user.edit_profile_view' ,compact('userData'));
    }

    public function UserChangePassword(){

        return view('user.user_change_password');

    }// End Method

    public function UpdateUser(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('upload/user_image/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/user_image'),$filename);
           $data['photo'] = $filename;
        }
            
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }// End Method 

    public function deleteUser($id)
    {
        User::find($id)->delete();

        // if (!$user) {     $user = 
        //     return redirect()->route('home')->with($notification);
        // }
        // $notification = array(
        //     'message' => 'Patient Inserted Successfully',
        //     'alert-type' => 'success'
        // )
        // $user->delete();

        $notification = array(
            'message' => 'User Delete Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('home')->with($notification);
        
    }


}
