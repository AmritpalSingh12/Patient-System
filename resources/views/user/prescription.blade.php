
@extends('layouts.app')

@section('main')
    <section id="about" class="about mt-7">
        <div class="container aos-init aos-animate">
            <div class="col-sm-12">
                    <div class="container aos-init aos-animate">
                        <div class="col-sm-12">
                            <div>

                                <div>
                                    <h3 align="center">Prescription Record</h3>
                                    <br>
                                    <div>
                                        <table class="table table-bordered, border border-4, border border-secondary">
                                            <tr>
                                                <th>Doctor</th>
                                                <th>Prescription name</th>
                                                <th>Prescription Description</th>
                                                <th>Duration</th>
                                                <th>Time of Day</th>
                                                <th>Created at</th>
                                            </tr>
                                            @foreach($prescriptions as $prescription)
                                                <tr>
                                                    <td>{{$prescription->doctor->firstname . ' ' . $prescription->doctor->lastname}}</td>
                                                    <td>{{$prescription->med->name}}</td>
                                                    <td>{{$prescription->med->description}}</td>
                                                    <td>{{$prescription->Days}}</td>
                                                    &nbsp;
                                                    <td>{{$prescription->timeofday}}</td>
                                                    <td>{{$prescription->created_at}}</td>
                                                </tr>
                                            @endforeach
                                        </table>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection

