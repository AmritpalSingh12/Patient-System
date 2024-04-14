<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rule;

class PatientController extends Controller
{
    //
    public  function  dashboard(){
        return view('user.index');
    }

    public  function  edit_profile(){
        $patient = auth()->user();
        return view('user.edit',compact('patient'));
    }

    public  function  update_profile(Request $request)
    {

        $id = auth()->id();
        $request->validate([
            'firstname' => ['required', 'string', 'max:255','alpha:ascii'],
            'lastname' => ['required','string','max:255','alpha:ascii'],
            'email' => [Rule::unique('users')->ignore($id),'required','email'],
            'dob' =>  ['required','date'],
            'gender' => ['required'],
            'doctor' => ['required'],
        ]);


        if($request->password != ''){
            $request->validate([
                'password' => ['required', 'string', 'min:8'],
            ]);
        }

        $user = User::where('id',$id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'doctor_id'=>$request->doctor,
            'password' => $request->password != '' ? Hash::make($request->password) : auth()->user()->password,
        ]);

        session()->flash('message','Profile Updated!');
        return redirect()->back();

    }


    public function  booking(){
        return view('user.booking');
    }


    public  function  booking_store(Request  $request){
            $request->validate([
                'title' => ['required', 'string', 'max:225'],
                'date' => ['required','date',Rule::unique('appointments','start_date')],
            ]);
            $date = Carbon::parse($request->date)->addMinutes(15);
            $appointment = Appointment::where('start_date',$date)->count();

            if($appointment > 0){
                $errors = new MessageBag(['date'=>['date errors 15min']]);
                return  redirect()->back()->withErrors($errors)->withInput();
            }

            Appointment::create([
                 'title'=>$request->title,
                'start_date'=>$request->date,
                'user_id'=>auth()->id(),
                'status'=>'Active'
            ]);

        session()->flash('message','Appointment Created!');
        return redirect()->back();
    }
    public  function  list_appointment( ){

        $appointment = Appointment::where('user_id','=', auth()->id() )->get();
        return view('user.appointment',compact('appointment'));
    }

    public  function  booking_delete($id){
        $appointment = Appointment::findOrFail($id);
        if($appointment->user_id == auth()->id()){
            $appointment->status = 'Cancelled';
            $appointment->save();
            session()->flash('message','Appointment Cancelled!');
        }

        return redirect()->back();
    }

    public  function  list_prescription(){
        $prescriptions =Prescription::where('user_id',auth()->id())->get();
        return view('.user.prescription',compact('prescriptions'));
    }
}
