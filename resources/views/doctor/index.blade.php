
@extends('layouts.app')

@section('main')
    <style>
        .card-img-top{
            padding:20px;
        }
    </style>
    <section id="about" class="about mt-7">
        <div class="container aos-init aos-animate">
            <div class="col-sm-12">
                <div>
                    <h3 align="center">Doctor Dashboard</h3> <br>
                    <div>
                        <div class="row">
                            <div class="col-md-5 offset-md-4">
                                <div class="card-group justify-content-center">
                                    <div class="card w-25">
                                        <img class="card-img-top img-fluid" src="{{asset('assets/img/img.png')}}">
                                        <div class="card-body">
                                            <h5 class="card-title">Upcoming Appointments</h5>
                                            <p class="card-text">View Appointment Status.</p>
                                            <a href="{{route('doctor_appointment')}}" class="btn btn-primary appointment-btn" style="white-space: normal;">Patient Upcoming Appointment</a>
                                        </div>
                                    </div>
                                    <div class="card w-25">
                                        <img class="card-img-top img-fluid" src="{{asset('assets/img/prescription.png')}}">
                                        <div class="card-body">
                                            <h5 class="card-title">Create Prescription</h5>
                                            <p class="card-text">Select prescription, dosage and patient</p>
                                            <a href="{{route('prescription_create')}}" class="btn btn-primary appointment-btn">Create Prescription</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        </div>
    </section>
@endsection

