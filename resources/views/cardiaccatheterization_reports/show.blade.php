@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient cardiac catherization report') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$cardiaccatheterizationReport->patient_id}}</div>
                    </div>
                   
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Cath_No</b></label>
                        <div class="col">: {{$cardiaccatheterizationReport->Cath_No}}</div>
                    </div>
                   
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Aortic_Pressure</b></label>
                        <div class="col-sm-4">: {{$cardiaccatheterizationReport->Aortic_Pressure}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Catheter_use</b></label>
                        <div class="col-sm-4">: {{$cardiaccatheterizationReport->Catheter_use}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Left_main_coronary_artery</b></label>
                        <div class="col-sm-4">: {{$cardiaccatheterizationReport->Left_main_coronary_artery}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Lad_Branches</b></label>
                        <div class="col">: {{$cardiaccatheterizationReport->Lad_Branches}}</div>
                    </div>

                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Circumflex_and_Branches</b></label>
                        <div class="col">: {{$cardiaccatheterizationReport->Circumflex_and_Branches}}</div>
                    </div>
                   
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Rca_and_Branches</b></label>
                        <div class="col-sm-4">: {{$cardiaccatheterizationReport->Rca_and_Branches}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Conclution</b></label>
                        <div class="col-sm-4">: {{$cardiaccatheterizationReport->Conclution}} </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Recommendation</b></label>
                        <div class="col-sm-4">: {{$cardiaccatheterizationReport->Recommendation}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Consultant_cardiologist</b></label>
                        <div class="col">: {{$cardiaccatheterizationReport->Consultant_cardiologist}}</div>
                    </div>


                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Date</b></label>
                        <div class="col">: {{$cardiaccatheterizationReport->Date}}</div>
                    </div>
                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('cardiaccatheterization_reports.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection