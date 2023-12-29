<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class DoctorController extends Controller{

    public function AddDoctor(){
        return view('backend.doctor.add_doctor');
    } // End Method 

    public function AllDoctor(){
        // latest()->get();
        $doctor = Doctor::all();
        return view('backend.doctor.all_doctor', compact('doctor'));
    } // End Method 

    public function StoreDoctor(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|unique:doctors|max:200',
            'phone' => 'required|max:200',
            'department' => 'required|max:200',
            'time' => 'required|max:200',
            'address' => 'required|max:400',
            'image' => 'required',  
        ],
        
        [
            'name.required' => 'This Doctor Name Field Is Required',
        ]


    );
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/doctor/'.$name_gen);
        $save_url = 'upload/doctor/'.$name_gen;

        Doctor::insert([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->department,
            'time' => $request->time,
            'address' => $request->address,
            'image' => $save_url,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Doctor Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.doctor')->with($notification); 
    } // End Method 

    //Edit Doctor 
    public function EditDoctor($id){
        $doctor = Doctor::findOrFail($id);
        return view('backend.doctor.edit_doctor',compact('doctor'));

    } // End Method 

    // Update Doctor
    public function UpdateDoctor(Request $request){

        $doctor_id = $request->id;

        if ($request->file('image')) {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/doctor/'.$name_gen);
        $save_url = 'upload/doctor/'.$name_gen;

        Doctor::findOrFail($doctor_id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'department' => $request->department,
            'time' => $request->time,
            'image' => $save_url,
            'updated_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Doctor Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.doctor')->with($notification); 
             
        } else{

            Doctor::findOrFail($doctor_id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'department' => $request->department,
            'time' => $request->time,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Doctor Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.doctor')->with($notification); 

        } // End else Condition  

    } // End Method 

    // Delete Doctor
    public function DeleteDoctor($id){

        $doctor_img = Doctor::findOrFail($id);
        $img = $doctor_img->image;
        unlink($img);

        Doctor::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Doctor Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    } // End Method 

    public function AllNeurology()
    {
        $neurology = Doctor::where('department', 'Neurologist')->get();
        // dd($neu);
        return view('user.doctor.neurology_doctor', compact('neurology'));
    }

    public function AllEyecare()
    {
        $eyecare = Doctor::where('department', 'Eye Care')->get();

        return view('user.doctor.eyecare_doctor', compact('eyecare'));

    }

    
    public function AllDental()
    {
        $dental = Doctor::where('department', 'Dental')->get();
        return view('user.doctor.dental_doctor', compact('dental'));

    }

    public function AllGynocology()
    {
        $gynecology = Doctor::where('department', 'Gynecologist')->get();
        return view('user.doctor.gyne_doctor',compact('gynecology'));
    }

}
