<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function AllAppointment(){
        $appointment = Appointment::latest()->get();
        return view('backend.appointment.all_appointment', compact('appointment'));
    }

    public function AddAppointment(){
        return view('backend.appointment.add_appointment');
    } // End Method

    public function UserAppointment($id){
        $doctor = Doctor::findOrFail($id);
        // dd($doctor);
        return view('user.appointment.user_appoinment', compact('doctor'));
    } // End Method

    public function StoreAppointment(Request $request){

        $validateData = $request->validate([
            'p_name' => 'required|max:200',
            'd_name' => 'required|max:200',
            'depart_name' => 'required|max:200',
            'phone' => 'required|max:100',
            'date' => 'required',  
        ],
        
        [
            'name.required' => 'This Appointment Name Field Is Required',
        ]

    );
    // dd($request->all());

        Appointment::insert([

            'p_name' => $request->p_name,
            'd_name' => $request->d_name,
            'depart_name' => $request->depart_name,
            'phone' => $request->phone,
            'date' => $request->date,
            // Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Appointment Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.appointment')->with($notification); 
    } // End Method 

    public function UserStoreAppointment(Request $request){

        $validateData = $request->validate([
            'p_name' => 'required|max:200',
            'd_name' => 'required|max:200',
            'depart_name' => 'required|max:200',
            'phone' => 'required|max:100',
            'date' => 'required',  
        ],
        
        [
            'name.required' => 'This Appointment Name Field Is Required',
        ]

    );
    // dd($request->all());

        Appointment::insert([

            'p_name' => $request->p_name,
            'd_name' => $request->d_name,
            'depart_name' => $request->depart_name,
            'phone' => $request->phone,
            'user_id' => Auth::user()->id,

            // 'date' => Carbon::parse($request->date)->format('m-d-Y'),
            'date' => $request->date, 

        ]);

         $notification = array(
            'message' => 'Appointment Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.user.appointment')->with($notification); 

    } // End Method 

    public function AllUserAppointment()
    {
        $userappointment = Appointment::where('user_id', Auth::user()->id)->get();
        // dd($userappointment);
        return view('user.appointment.all_user_appointment', compact('userappointment'));
    }

        // Delete Patient
        public function DeleteeAppointment($id){

            // $patient_img = Patient::findOrFail($id);
            // $img = $patient_img->image;
            // unlink($img);
    
            Appointment::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Appointment Deleted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification); 
    
        } // End Method 
}
