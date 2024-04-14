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
                                    <th>Date/Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($appointment as $appointments)
                                    <tr class="{{$appointments->status === 'Active' ? 'table-success' : 'table-danger'}}">
                                        <td>{{$appointments->title}}</td>
                                        <td>{{$appointments->start_date}}</td>
                                        <td>{{$appointments->status}}</td>
                                        <td>
                                            <a href="{{route('booking_delete',$appointments->id)}}"
                                               class="btn btn-outline-danger">Cancel</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
    </section>
@endsection

