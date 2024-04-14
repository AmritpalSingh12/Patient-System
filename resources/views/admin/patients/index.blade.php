@extends('layouts.app')


@section('main')
    <div id="main">
        <section id="about" class="about mt-7">
           <div class="container aos-init aos-animate">
               <div class="col-sm-12">
                   <div>
                       <h1>Patient List</h1>
                       <a href="{{route('patient_create')}}"class="appointment-btn">Add Patient</a>
                   </div>
                   &nbsp;
                   <div>
                       <form action="{{route('search_patient')}}" method="POST">
                           @csrf
                           <input type="text" placeholder="Search..." name="search">
                           <button type="submit">Search</button>
                           @if(\Request::route()->getName() == 'search_patient')
                               <button href="{{route('patient')}}">Clear</button>
                           @endif
                       </form>
                       &nbsp;
                   </div>
               </div>
               <div>
                   <table class="table table-bordered, border border-4, border border-secondary">
                       <tr>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>DOB</th>
                           <th>Gender</th>
                           <th>Doctor</th>
                           <th>Action</th>
                       </tr>
                       @foreach($patients as $patient)
                           <tr>

                               <td>{{$patient->firstname}}</td>
                               <td>{{$patient->lastname}}</td>
                               <td>{{$patient->email}}</td>
                               <td>{{$patient->dob}}</td>
                               <td>{{$patient->gender}}</td>
                               <td>{{\App\Models\User::where('doctor_id',$patient->doctor_id)->first()->firstname}}</td>
                               <td>
                                   <div>
                                       <a href="{{route('edit_patient',$patient->id)}}" class="btn btn-outline-primary">Edit</a>
                                       <a href="javascript:void(0)" onclick="DeletePatient({{$patient->id}})" class="btn btn-outline-secondary">Delete</a>

                                   </div>
                               </td>

                           </tr>
                       @endforeach
                       @if(count($patients) == 0)

                           <h1>No Patient </h1>

                       @endif


                   </table>
               </div>
               </div>

        </section>
    </div>
@endsection


@section('scripts')
    <script>

        function DeletePatient(id) {
          if(confirm("Please click OK to delete patient record")){
              let url = 'delete/'+id+'/patient'
              window.location.href = url;
          }
        }
    </script>

@endsection
