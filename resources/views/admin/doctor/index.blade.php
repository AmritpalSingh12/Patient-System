@extends('layouts.app')


@section('content')
    <section id="about" class="about mt-7">
        <div class="container aos-init aos-animate">
            <div class="col-sm-12">
                <div>
                    <h1 id="heading">Doctor List</h1>
                    <a href="{{route('doctor_create')}}" class="appointment-btn">Add Doctor</a>
                </div>
                &nbsp;
                <div>
                    <form action="{{route('search_doctor')}}" method="POST">
                        @csrf
                        <input type="text" placeholder="Search..." name="search">
                        <button type="submit">Search</button>
                        @if(\Request::route()->getName() == 'search_doctor')
                            <button href="{{route('doctor')}}">Clear</button>
                        @endif
                    </form>
                    &nbsp;
                </div>
                <div>
                    <table class="table table-bordered, border border-4, border border-secondary">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Action</th>
                        </tr>
                        @foreach($doctor as $doctors)
                            <tr>

                                <td>{{$doctors->firstname}}</td>
                                <td>{{$doctors->lastname}}</td>
                                <td>{{$doctors->email}}</td>
                                <td>{{$doctors->dob}}</td>
                                <td>{{$doctors->gender}}</td>

                                <td>
                                    <div>
                                        <a href="{{route('edit_doctor',$doctors->id)}}" class="btn btn-outline-primary">Edit</a>
                                        <a href="javascript:void(0)" onclick="DeleteDoctor({{$doctors->id}})"class="btn btn-outline-secondary">Delete</a>
                                    </div>
                                </td>

                            </tr>
                        @endforeach


                    </table>
                </div>

            </div>
        </div>
    </section>

@section('scripts')
    <script>

        function DeleteDoctor(id) {
            if(confirm("Please click OK to delete doctor record")){
                let url = 'delete/'+id+'/patient'
                window.location.href = url;
            }
        }
    </script>


@endsection
