<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //
    public  function  appointment_index(){
        $appointment = Appointment::all();
        return view('admin.appointment',compact('appointment'));
    }

    public  function  patient_index(){
        $patients = User::where('role','user')->get();
        return view('admin.patients.index',compact('patients'));
    }

    public  function  delete_patient($id){
        User::where('id',$id)->delete();
        session()->flash('message','Patient Deleted!');
        return redirect()->back();
    }

    public  function  edit_patient($id){
        $patient = User::findOrFail($id);
        return view('admin.patients.edit',compact('patient'));
    }

    public  function  update_patient(Request $request, $id){
        $request->validate([
            'firstname' => ['required', 'string', 'max:255','alpha:ascii'],
            'lastname' => ['required','string','max:255','alpha:ascii'],
            'email' => [Rule::unique('users')->ignore($id),'required','email'],
            'dob' =>  ['required','date'],
            'gender' => ['required']
        ]);
        $patient = User::where('id',$id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
        ]);
        session()->flash('message','Patient Updated!');
        return redirect()->back();
    }
    public  function  patient_create(){
        return view('admin.patients.create');
    }

    public  function  patient_store(Request  $request){
        $request->validate([
            'firstname' => ['required', 'string', 'max:255','alpha:ascii'],
            'lastname' => ['required','string','max:255','alpha:ascii'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dob' =>  ['required','date'],
            'gender' => ['required']
        ]);

        $doctors = \App\Models\User::where('role','doctor')->get('id');
        $key = rand(0,count($doctors) - 1);
        $result = $doctors[$key];

        User::create([
            'firstname' => $request->firstname,
            'lastname' =>  $request->lastname,
            'dob' =>  $request->dob,
            'gender' =>  $request->gender,
            'email' =>  $request->email,
            'password' => Hash::make( $request->password),
            'doctor_id'=>$result ? $result->id : null,
            'role'=>'user'
        ]);

        session()->flash('message','Patient Created!');
        return redirect()->back();
    }

    //
    public  function  doctor_index(){
        $doctor = User::where('role','doctor')->get();
        return view('admin.doctor.index',compact('doctor'));
    }

    public  function  search_patient(Request $request) {
        $search = $request->search;
       // $patients = user::where('firstname','like', '%' .$search.'%' )->get();
        $patients =    User::where(function ($query) use ($search) {
            $query->where('firstname', 'like', '%' .$search.'%')
                ->orWhere('lastname', 'like', '%' .$search.'%')
                ->orWhere('email', 'like', '%' .$search.'%');
        })->where('role','user')
            ->get();
        return view('admin.patients.index',compact('patients'));
    }

    public  function  delete_doctor($id){
        User::where('id',$id)->delete();
        session()->flash('message','Doctor Deleted!');
        return redirect()->back();
    }
    public  function  edit_doctor($id){
        $doctor = User::findOrFail($id);
        return view('admin.doctor.edit',compact('doctor'));
    }
    public  function  update_doctor(Request $request, $id)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255','alpha:ascii'],
            'lastname' => ['required', 'string', 'max:255','alpha:ascii'],
            'email' => [Rule::unique('users')->ignore($id), 'required', 'email'],
            'dob' => ['required', 'date'],
            'gender' => ['required']
        ]);
        $doctor = User::where('id', $id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'dob' => $request->dob,
            'gender' => $request->gender,
        ]);
        session()->flash('message', 'Patient Updated!');
        return redirect()->back();
    }

    public  function  search_doctor(Request $request) {
        $search = $request->search;
        // $patients = user::where('firstname','like', '%' .$search.'%' )->get();
        $doctor =    User::where(function ($query) use ($search) {
            $query->where('firstname', 'like', '%' .$search.'%')
                ->orWhere('lastname', 'like', '%' .$search.'%')
                ->orWhere('email', 'like', '%' .$search.'%');
        })->where('role','doctor')->get();
        return view('admin.doctor.index',compact('doctor'));
    }

    public  function  doctor_create(){
        return view('admin.doctor.create');
    }

    public  function  doctor_store(Request  $request){
        $request->validate([
            'firstname' => ['required', 'string', 'max:255','alpha:ascii'],
            'lastname' => ['required','string','max:255','alpha:ascii'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dob' =>  ['required','date'],
            'gender' => ['required']
        ]);

        User::create([
            'firstname' => $request->firstname,
            'lastname' =>  $request->lastname,
            'dob' =>  $request->dob,
            'gender' =>  $request->gender,
            'email' =>  $request->email,
            'password' => Hash::make( $request->password),

            'role'=>'doctor'
        ]);

        session()->flash('message','Doctor Created!');
        return redirect()->back();
    }


}
