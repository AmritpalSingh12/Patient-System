
@extends('layouts.app')

@section('main')
    <section id="about" class="about mt-7">
        <div class="container aos-init aos-animate">
            <div class="col-sm-12">
                <div>
                    <h1>Booking</h1>
                    <div>
                        <div class="card-body">
                            <form method="post" action="{{route('booking_store')}}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Reason of the Appointment') }}</label>

                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control @error('tile') is-invalid @enderror" name="title" value="{{ old('title')}}"  autofocus>

                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Select Date and Time of the appointment') }}</label>

                                    <div class="col-md-6">
                                        <input id="date" type="datetime-local" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" autofocus>

                                        @error('date')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="appointment-btn">
                                            {{ __('Book Appointment') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>

                        </div>
        </div>
    </section>
@endsection

