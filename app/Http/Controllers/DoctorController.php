<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DoctorController extends Controller
{
   public  function  dashboard(){
       return view('doctor.index');
   }

   public  function  doctor_appointment(){
       $today = Carbon::now();
       $appointment = Appointment::whereDate('start_date',$today->toDateString())->get();

       return view('doctor.appointment',compact('appointment'));
   }

   public  function  prescription_create(){
       $users = User::where('doctor_id',auth()->id())->get();
       $meds = Medicine::all();
       return view('doctor.prescription',compact('users','meds'));
   }

   public  function  prescription_store(Request $request){
       $request->validate([
            'prescription'=>['required', 'string'],
            'patient' => ['required'],
           'duration'=> ['required'],
           'timeofday'=>['required']
       ]);

       Prescription::create([
           'doctor_id'=> auth()->id(),
           'user_id'=> $request->patient,
           'medicine_id'=> $request->prescription,
           'Days'=> $request->duration,
           'timeofday'=> $request->timeofday,
       ]);

       session()->flash('message','Prescription Created!');
       return redirect()->back();
   }
}
