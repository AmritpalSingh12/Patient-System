
@extends('layouts.app')

@section('main')
    <section id="about" class="about mt-7">
        <div class="container aos-init aos-animate">
            <div class="col-sm-12">
                <div class="card-body">
                    <form method="POST" action="{{route('prescription_store')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="patient" class="col-md-4 col-form-label text-md-end">{{ __('Select Patient') }}</label>

                            <div class="col-md-6">
                                <select id="gender"  class="form-control @error('patient') is-invalid @enderror" value="{{ old('patient') }}" name="patient"  required>

                                    <option value="" selected disabled>Select your Patient</option>
                                    @foreach($users as $patient)
                                        <option value="{{$patient->id}}">{{ $patient->firstname . ' ' . $patient->lastname}}</option>
                                    @endforeach
                                </select>

                                @error('patient')
                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                                &nbsp;
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="prescription" class="col-md-4 col-form-label text-md-end">{{ __('Select Medicine') }}</label>

                            <div class="col-md-6">
                                <select id=""  class="form-control @error('prescription') is-invalid @enderror" value="{{ old('prescription') }}" name="prescription"  required>

                                    <option value="" selected disabled>List of Medicine</option>
                                    @foreach($meds as $med)
                                        <option value="{{$med->id}}">{{ $med->name }}</option>
                                    @endforeach
                                </select>

                                @error('prescription')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                      </span>
                                @enderror
                            </div>
                            <div>
                                &nbsp;
                                &nbsp;
                                &nbsp;
                                <div class="row mb-3">
                                    <label for="timeofday" class="col-md-4 col-form-label text-md-end">{{ __('Time Of Day') }}</label>

                                    <div class="col-md-6">
                                        <select id="timeofday"  class="form-control @error('patient') is-invalid @enderror" value="{{ old('timeofday') }}" name="timeofday"  required>

                                            <option value="" selected disabled>Select Time of Day</option>
                                            <option value="Morning">Morning</option>
                                            <option value="Afternoon">Afternoon</option>
                                            <option value="Evening">Evening</option>
                                        </select>

                                        @error('timeofday')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                      </span>
                                        @enderror
                                        &nbsp;
                                    </div>
                                </div>
                            </div>

                            <div class="container d-flex justify-content-center">
                                <div class="col-md-3 ">

                                    <label for="duration" class="bi-type-bold">{{ __('Duration') }}</label>
                                    <label for="range" class="form-label">-Days</label>
                                    <input type="range" class="form-range" min="0" max="31" step="1" id="customRange3" onchange="updateTextInput(this.value);" @error('duration')  @enderror name="duration"  required>
                                    <input type="text" id="textInput" value="">

                                    @error('duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                      </span>
                                    @enderror
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="appointment-btn">
                                    {{ __('Create Prescription') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
        <script>
            function updateTextInput(val) {
                document.getElementById('textInput').value=val;
            }


        </script>
    </div>
