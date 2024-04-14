@extends('layouts.app')

@section('main')

    <section id="about" class="about mt-7">
        <div class="container aos-init aos-animate">
            <div class="col-sm-12">
                <div>



                    <div>
                        <h2>Appointment status</h2>
                        <div>
                            <table class="table table-bordered, border border-4, border border-secondary">
                                <tr>
                                    <th>Reason</th>
                                    <th>Patient name</th>
                                    <th>Date/Time</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($appointment as $appointments)

                                    <tr>
                                        <td>{{$appointments->title}}</td>
                                        <td>{{$appointments->user->firstname}}</td>
                                        <td>{{$appointments->start_date}}</td>
                                        <td>{{$appointments->status}}</td>

                                    </tr>

                                @endforeach
                            </table>

                        </div>


                    </div>
        </div>
    </section>
@endsection
