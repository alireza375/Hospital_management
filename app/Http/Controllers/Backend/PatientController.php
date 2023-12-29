<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class PatientController extends Controller
{
    public function AllPatient(){
        $patient = Patient::latest()->get();
        return view('backend.patient.all_patient', compact('patient'));
    }
    // End Method

    public function AddPatient(){
        return view('backend.patient.add_patient');
    }

    public function StorePatient(Request $request){

        $validateData = $request->validate([
            'name' => 'required|max:200',
            'phone' => 'required|max:200',
            'department' => 'required|max:200',
            'address' => 'required|max:400', 
        ],
        
        [
            'name.required' => 'This Patient Name Field Is Required',
        ]


    );
      
        Patient::insert([

            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'department' => $request->department,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Patient Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.patient')->with($notification); 
    } // End Method 

    // Delete Patient
    public function DeletePatient($id){

        $patient_img = Patient::findOrFail($id);
        $img = $patient_img->image;
        unlink($img);

        Patient::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Patient Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    } // End Method 


}
