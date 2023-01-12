@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update inward Admission summary ') }}</div>
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

                    <form action="{{route('inward_admission_summaries.update' ,$InwardAdmissionSummary->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}" {{($patient->id==$InwardAdmissionSummary->patient_id)? 'selected':''}}>{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                        <div class="col">
                                <div class="form-group mb-3">
                                    <label for="DOA" class="form-label mb-1"><b>{{ __('DOA') }}</b></label>
                                    <input id="DOA" type="date" class="form-control" name="DOA" placeholder="mm-dd-yyyy" value="{{$InwardAdmissionSummary->DOA}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="DOD" class="form-label mb-1"><b>{{ __('DOD') }}</b></label>
                                    <input id="DOD" type="date" class="form-control" name="DOD" placeholder="mm-dd-yyyy" value="{{$InwardAdmissionSummary->DOD}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="BHT_NO" class="form-label mb-1"><b>{{ __('BHT No') }}</b></label>
                                    <input id="BHT_NO" type="text" class="form-control" name="BHT_NO" value="{{$InwardAdmissionSummary->BHT_NO}}" autocomplete="BHT_NO">
                                </div>
                            </div>
                           
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Reason_For_Admission" class="form-label mb-1"><b>{{ __('Reason For Admission') }}</b></label>
                                    <input id="Reason_For_Admission" type="text" class="form-control" name="Reason_For_Admission" value="{{$InwardAdmissionSummary->Reason_For_Admission}}" autocomplete="Reason_For_Admission">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Acute_Problem" class="form-label mb-1"><b>{{ __('Acute Problem') }}</b></label>
                                    <input id="Acute_Problem" type="text" class="form-control" name="Acute_Problem" value="{{$InwardAdmissionSummary->Acute_Problem}}" autocomplete="Acute_Problem">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Pulse" class="form-label mb-1"><b>{{ __('Pulse') }}</b></label>
                                    <input id="Pulse" type="number" class="form-control" name="Pulse" value="{{$InwardAdmissionSummary->Pulse}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="BP" class="form-label mb-1"><b>{{ __('BP (mmHg)') }}</b></label>
                                    <input id="BP" type="number" step="0.01" class="form-control" name="BP" value="{{$InwardAdmissionSummary->BP}}">
                                </div>
                            </div>
                        </div>
                        <h4><b> Treatment given</b></h4>
                       
                        <div class="row items-center justify-start">
                        <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Treatment_on_Discharge" class="form-label mb-1"><b>{{ __('Treatment_on_Discharge') }}</b></label>
                                    <select id="Treatment_on_Discharge" class="form-select" name="Treatment_on_Discharge">
                                        <option selected>Select </option>
                                        <option value="Normal_Treatment" {{($InwardAdmissionSummary->Treatment_on_Discharge=='Normal_Treatment')? 'selected':''}}>Normal Treatment</option>
                                        <option value="Special_Treatment" {{($InwardAdmissionSummary->Treatment_on_Discharge=='Special_Treatment')? 'selected':''}}>Special Treatment</option>
                                    </select>
                                </div>
                            </div>
                           <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Special_Treatment" class="form-label mb-1"><b>{{ __('Special Treatment') }}</b></label>
                                    <input id="Special_Treatment" type="text" class="form-control" name="Special_Treatment" value="{{$InwardAdmissionSummary->Special_Treatment}}" autocomplete="Special_Treatment">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update Inward Admission summary') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('inward_admission_summaries.index')}}" style="width: 200px;">
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