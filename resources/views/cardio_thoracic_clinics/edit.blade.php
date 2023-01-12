@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update Cardio Thoracic Clinic Details') }}</div>
                <div class="card-body text-dark">
                    <!-- error messages -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> There were some problems with your input.<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{route('cardio_thoracic_clinics.update' , $cardio_thoracic_clinic->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$cardio_thoracic_clinic->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="date" type="date" class="form-control" name="date" placeholder="mm-dd-yyyy" value="{{$cardio_thoracic_clinic->date}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="time" class="form-label mb-1"><b>{{ __('Time') }}</b></label>
                                    <input id="time" type="time" class="form-control" name="time" value="{{$cardio_thoracic_clinic->time}}">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="done_by" class="form-label mb-1"><b>{{ __('Done By') }}</b></label>
                                    <input id="done_by" type="text" class="form-control" name="done_by" value="{{$cardio_thoracic_clinic->done_by}}" autocomplete="done_by">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update Cardio Thoracic Clinic') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('cardio_thoracic_clinics.index')}}" style="width: 200px;">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection