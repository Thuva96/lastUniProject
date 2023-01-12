@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Create a cardiac catheterization report for patient') }}</div>
                <div class="card-body text-dark">
                    <!-- error messages -->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('cardiaccatheterization_reports.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="patient_id" class="form-label mb-1"><b>{{ __('Patient') }}</b></label>
                            <select id="patient_id" class="form-select" name="patient_id" data-live-search="true" autofocus>
                                <option selected>Select Patient</option>
                                @foreach($patient as $patient)
                                <option value="{{$patient->id}}">{{$patient->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row items-center justify-start">
                          <div class="col">
                        <div class="form-group mb-3">
                            <label for="Cath_No" class="form-label mb-1"><b>{{ __('Cath_No') }}</b></label>
                            <input id="Cath_No" type="number" class="form-control" name="Cath_No" autocomplete="Cath_No">
                        </div>
                        </div>
</div>
                          <h4>TRANS RADIAL/FEMORAL CORONARY ANGIOGRAM</h4>
                          <div class="row items-center justify-start">
                          <div class="col">
                        <div class="form-group mb-3">
                            <label for="Aortic_Pressure" class="form-label mb-1"><b>{{ __('Aortic Pressure') }}(mmHg)</b></label>
                            <input id="Aortic_Pressure" type="number" class="form-control" name="Aortic_Pressure" autocomplete="Aortic_Pressure">
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group mb-3">
                            <label for="Catheter_use" class="form-label mb-1"><b>{{ __('Catheter use') }}</b></label>
                            <input id="Catheter_use" type="text" class="form-control" name="Catheter_use" autocomplete="Catheter_use">
                        </div>
                        </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="Left_main_coronary_artery" class="form-label mb-1"><b>{{ __('Left main coronary artery') }}</b></label>
                            <input id="Left_main_coronary_artery" type="text" class="form-control" name="Left_main_coronary_artery" autocomplete="Left_main_coronary_artery">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Lad_Branches" class="form-label mb-1"><b>{{ __('Lad and Branches') }}</b></label>
                            <input id="Lad_Branches" type="text" class="form-control" name="Lad_Branches" autocomplete="Lad_Branches">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Circumflex_and_Branches" class="form-label mb-1"><b>{{ __('Circumflex and Branches') }}</b></label>
                            <input id="Circumflex_and_Branches" type="text" class="form-control" name="Circumflex_and_Branches" autocomplete="Circumflex_and_Branches">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Rca_and_Branches" class="form-label mb-1"><b>{{ __('Rca and Branches') }}</b></label>
                            <input id="Rca_and_Branches" type="text" class="form-control" name="Rca_and_Branches" autocomplete="Rca_and_Branches">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Conclution" class="form-label mb-1"><b>{{ __('Conclution') }}</b></label>
                            <input id="Conclution" type="text" class="form-control" name="Conclution" autocomplete="Conclution">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Recommendation" class="form-label mb-1"><b>{{ __('Recommendation') }}</b></label>
                            <input id="Recommendation" type="text" class="form-control" name="Recommendation" autocomplete="Recommendation">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Consultant_cardiologist" class="form-label mb-1"><b>{{ __('Consultant_cardiologist') }}</b></label>
                            <input id="Consultant_cardiologist" type="text" class="form-control" name="Consultant_cardiologist" autocomplete="Consultant_cardiologist">
                        </div>
                        <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="Date" type="Date" class="form-control" name="Date" placeholder="mm-dd-yyyy">
                                </div>
                            </div>
                           
                        </div>
                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Create ') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('cardiaccatheterization_reports.index')}}" style="width: 200px;">
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