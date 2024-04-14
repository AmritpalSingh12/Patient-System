
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
                                    <th>User name</th>
                                    <th>Date/Time</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($appointment as $appointments)
                                    @if($appointments->user->doctor_id == auth()->id())

                                        <tr class="{{$appointments->status === 'Active' ? 'table-success' : 'table-danger'}}">
                                            <td>{{$appointments->title}}</td>
                                            <td>{{$appointments->user->firstname}}</td>
                                            <td>{{$appointments->start_date}}</td>
                                            <td>
                                                <span>{{$appointments->status}}</span>
                                            </td>
                                        </tr>

                                    @endif
                                @endforeach

                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

