
@extends('layouts.app')

@section('main')
    <style>
        .card-img-top {
            width: 100%;
            padding: 20px;
        }
    </style>
    <section id="about" class="about mt-7">
        <div class="container aos-init aos-animate">
            <div class="col-sm-12">
                <div>
                    <h3 align="center">Patient Dashboard</h3>
                    <br>
                    <div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="card-group">
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="{{asset('assets/img/patient.png')}}">
                                        <div class="card-body">
                                            <h5 class="card-title">Edit Profile</h5>
                                            <p class="card-text">Patient<br>Edit information.</p>
                                            <a href="{{route('edit_profile')}}" class="appointment-btn">Edit Profile</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top img-fluid" src="{{asset('assets/img/appointment.png')}}">
                                        <div class="card-body">
                                            <h5 class="card-title">Book Appointment</h5>
                                            <p class="card-text">Reason and time/date. <br><br></p>
                                            <a href="{{route('booking')}}" class="appointment-btn">Book Appointment</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('assets/img/img.png')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Appointment List</h5>
                                            <p class="card-text">View Appointments <br><br></p>
                                            <a href="{{route('list_appointment')}}" class="appointment-btn">Upcoming Appoint..</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img class="card-img-top" src="{{asset('assets/img/prescription.png')}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Prescription List</h5>
                                            <p class="card-text">View Prescription details</p>
                                            <a href="{{route('list_prescription')}}" class="appointment-btn">View Prescription</a>
                                        </div>
                                    </div>
                                </div
                            </div>
                        </div>>
                    </div>




                </div>
        </div>
    </section>
@endsection

