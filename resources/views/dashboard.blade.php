@extends('layouts.app')



@section('main')

    <div id="main">
        <section id="about" class="about mt-7">
            <div class="row">
                <div class="col-sm-12 col-md-6 offset-md-3">
                    <div class="card-group">
                        <div class="card w-25">
                            <img class="card-img-top img-fluid" src="{{asset('assets/img/patient.png')}}">
                            <div class="card-body">
                                <h5 class="card-title">Patient List</h5>
                                <p class="card-text">View Patient<br>Edit/Add/Delete.</p>
                                <a href="{{route('patient')}}" class="appointment-btn">Patient</a>
                            </div>
                        </div>
                        <div class="card w-25">
                            <img class="card-img-top img-fluid" src="{{asset('assets/img/doctor.png')}}">
                            <div class="card-body">
                                <h5 class="card-title">Doctor List</h5>
                                <p class="card-text">View Doctor<br>Edit/Add/Delete.</p>
                                <a href="{{route('doctor')}}" class="appointment-btn">Doctor</a>
                            </div>
                        </div>
                        <div class="card w-25">
                            <img class="card-img-top" src="{{asset('assets/img/appointment.png')}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Appointment List</h5>
                                <p class="card-text">View Patient Appointments <br><br></p>
                                <a href="{{route('appointment')}}" class="appointment-btn">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
