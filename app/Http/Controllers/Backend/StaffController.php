<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Staff;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class StaffController extends Controller
{
    public Function AddStaff(){
        return view('backend.staff.add_staff');
    }

    public function AllStaff(){
        $staff = Staff::latest()->get();
        return view('backend.staff.all_staff', compact('staff'));
    }

    public function StoreStaff(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:200',
            'phone' => 'required|max:200',
            'department' => 'required|max:200',
            'address' => 'required|max:400',
            'image' => 'required',  
        ],
        
        [
            'name.required' => 'This Staff Name Field Is Required',
        ]


    );
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/staff/'.$name_gen);
        $save_url = 'upload/staff/'.$name_gen;

        Staff::insert([

            'name' => $request->name,
            'phone' => $request->phone,
            'department' => $request->department,
            'address' => $request->address,
            'image' => $save_url,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Staff Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.staff')->with($notification); 
    } // End Method 

        //Edit Staff 
        public function EditStaff($id){

            $staff = Staff::findOrFail($id);
            return view('backend.staff.edit_staff',compact('staff'));
    
        } // End Method 

    // Update Staff
    public function UpdateStaff(Request $request){

        $staff_id = $request->id;

        if ($request->file('image')) {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/staff/'.$name_gen);
        $save_url = 'upload/staff/'.$name_gen;

        Staff::findOrFail($staff_id)->update([

            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'department' => $request->department,
            'image' => $save_url,
            'updated_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Staff Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.staff')->with($notification); 
             
        } else{

            Staff::findOrFail($staff_id)->update([

            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'department' => $request->department,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Staff Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.staff')->with($notification); 

        } // End else Condition  

    } // End Method 

    // Delete Staff
    public function DeleteStaff($id){

        $staff_img = Staff::findOrFail($id);
        $img = $staff_img->image;
        unlink($img);

        Staff::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Staff Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    } // End Method 



}
