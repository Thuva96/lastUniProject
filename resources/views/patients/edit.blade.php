@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Update patient') }}</div>
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

                    <form action="{{route('patients.update' , $patient->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="clinic_no" class="form-label mb-1"><b>{{ __('Clinic No') }}</b></label>
                                    <input id="clinic_no" type="text" class="form-control" name="clinic_no" value="{{$patient->clinic_no}}" autofocus>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="case_no" class="form-label mb-1"><b>{{ __('Case No') }}</b></label>
                                    <input id="case_no" type="text" class="form-control" name="case_no" value="{{$patient->case_no}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="form-label mb-1"><b>{{ __('Name') }}</b></label>
                            <input id="name" type="text" class="form-control" name="name" value="{{$patient->name}}" autocomplete="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label mb-1"><b>{{ __('Address') }}</b></label>
                            <input id="address" type="text" class="form-control" name="address" value="{{$patient->address}}">
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="dob" class="form-label mb-1"><b>{{ __('Date of Birth') }}</b></label>
                                    <input id="dob" type="date" class="form-control" name="dob" placeholder="dd-mm-yyyy" value="{{$patient->dob}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="age" class="form-label mb-1"><b>{{ __('Age') }}</b></label>
                                    <input id="age" type="number" class="form-control" name="age" value="{{$patient->age}}">
                                </div>
                            </div>
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="gender" class="form-label mb-1"><b>{{ __('Gender') }}</b></label>
                                    <select id="gender" class="form-select" name="gender">
                                        <option selected>Select Gender </option>
                                        <option value="Male" {{($patient->gender=='Male')? 'selected':''}}>Male</option>
                                        <option value="Female" {{($patient->gender=='Female')? 'selected':''}}>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="blood_group" class="form-label mb-1"><b>{{ __('Blood Group') }}</b></label>
                                    <select id="blood_group" class="form-select" name="blood_group">
                                        <option selected>Select Blood Group</option>
                                        <option value="A+" {{($patient->blood_group=='A+')? 'selected':''}}>A+</option>
                                        <option value="A-" {{($patient->blood_group=='A-')? 'selected':''}}>A-</option>
                                        <option value="B+" {{($patient->blood_group=='B+')? 'selected':''}}>B+</option>
                                        <option value="B-" {{($patient->blood_group=='B-')? 'selected':''}}>B-</option>
                                        <option value="AB+" {{($patient->blood_group=='AB+')? 'selected':''}}>AB+</option>
                                        <option value="AB-" {{($patient->blood_group=='AB-')? 'selected':''}}>AB-</option>
                                        <option value="O+" {{($patient->blood_group=='O+')? 'selected':''}}>O+</option>
                                        <option value="O-" {{($patient->blood_group=='O-')? 'selected':''}}>O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="diagnosis" class="form-label mb-1"><b>{{ __('Diagnosis') }}</b></label>
                            <textarea type="text" class="form-control" id="diagnosis" rows="2" name="diagnosis">{{$patient->diagnosis}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="medical_problems" class="form-label mb-1"><b>{{ __('Associated Medical Problems') }}</b></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="DM" value="1" name="DM" {{($patient->DM=='1')? 'checked':''}}>
                                <label class="form-check-label" for="DM"><b>DM</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="HT" value="1" name="HT" {{($patient->HT=='1')? 'checked':''}}>
                                <label class="form-check-label" for="HT"><b>HT</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="DYSLIPIDAEMIA" value="1" name="DYSLIPIDAEMIA" {{($patient->DYSLIPIDAEMIA=='1')? 'checked':''}}>
                                <label class="form-check-label" for="DYSLIPIDAEMIA"><b>DYSLIPIDAEMIA</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="CVA_TIA" value="1" name="CVA_TIA" {{($patient->CVA_TIA=='1')? 'checked':''}}>
                                <label class="form-check-label" for="CVA_TIA"><b>CVA/TIA</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="PVD" value="1" name="PVD" {{($patient->PVD=='1')? 'checked':''}}>
                                <label class="form-check-label" for="PVD"><b>PVD</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="BA" value="1" name="BA" {{($patient->BA=='1')? 'checked':''}}>
                                <label class="form-check-label" for="BA"><b>BA</b></label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input mt-1" type="checkbox" id="RENAL_DISEASE" value="1" name="RENAL_DISEASE" {{($patient->RENAL_DISEASE=='1')? 'checked':''}}>
                                <label class="form-check-label" for="RENAL_DISEASE"><b>RENAL DISEASE</b></label>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="other" class="form-label mb-1"><b>{{ __('Other Medical Problems') }}</b></label>
                            <input id="other" type="text" class="form-control" name="other" value="{{$patient->other}}">
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" type="checkbox" id="alcohol" value="1" name="alcohol" {{($patient->alcohol=='1')? 'checked':''}}>
                            <label class="form-check-label" for="alcohol"><b>Alcohol</b></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" type="checkbox" id="smoking" value="1" name="smoking" {{($patient->smoking=='1')? 'checked':''}}>
                            <label class="form-check-label" for="smoking"><b>Smoking</b></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" type="checkbox" id="family_hx" value="1" name="family_hx" {{($patient->family_hx=='1')? 'checked':''}}>
                            <label class="form-check-label" for="family_hx"><b>Family Hx</b></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input mt-1" type="checkbox" id="allergic_hx" value="1" name="allergic_hx" {{($patient->allergic_hx=='1')? 'checked':''}}>
                            <label class="form-check-label" for="allergic_hx"><b>Allergic Hx</b></label>
                        </div>
                        <div class="row items-center justify-start mt-3">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="height" class="form-label mb-1"><b>{{ __('Height (cm)') }}</b></label>
                                    <input id="height" type="number" step="0.01" class="form-control" name="height" value="{{$patient->height}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="weight" class="form-label mb-1"><b>{{ __('Weight (kg)') }}</b></label>
                                    <input id="weight" type="number" step="0.01" class="form-control" name="weight" value="{{$patient->weight}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="bmi" class="form-label mb-1"><b>{{ __('BMI (kgm-2)') }}</b></label>
                                    <input id="bmi" type="number" step="0.01" class="form-control" name="bmi" value="{{$patient->bmi}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Update Patient') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('patients.index')}}" style="width: 200px;">
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