@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3" style="width: 500px;">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header text-center font-semibold text-lg">{{ __('View patient Special Investigation-2d Echo') }}</div>
                <div class="card-body text-dark">
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Patient</b></label>
                        <div class="col">: {{$twodEcho->patient_id}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Date</b></label>
                        <div class="col">: {{$twodEcho->Date}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>Doneby</b></label>
                        <div class="col">: {{$twodEcho->Doneby}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b> Finding</b></label>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>LVH_PRESENT_NO</b></label>
                        <div class="col-sm-4">: {{$twodEcho->LVH_PRESENT_NO}}</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>LVEDO</b></label>
                        <div class="col-sm-4">: {{$twodEcho->LVEDO}}mm</div>
                    </div>
                    <div class="row">
                        <label class="col-sm-4 col-label-form"><b>IVS</b></label>
                        <div class="col-sm-4">: {{$twodEcho->IVS}} mm</div>
                    </div>
                   
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>AV</b></label>
                        <div class="col">: {{$twodEcho->AV}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>PV</b></label>
                        <div class="col">: {{$twodEcho->PV}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>TV</b></label>
                        <div class="col">: {{$twodEcho->TV}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>PA</b></label>
                        <div class="col">: {{$twodEcho->PA}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>LV_RWMD</b></label>
                        <div class="col">: {{$twodEcho->LV_RWMD}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>LA_LV_Clot</b></label>
                        <div class="col">: {{$twodEcho->LA_LV_Clot}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Pericardial_effusion</b></label>
                        <div class="col">: {{$twodEcho->Pericardial_effusion}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Others</b></label>
                        <div class="col">: {{$twodEcho->Others}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Conclution</b></label>
                        <div class="col">: {{$twodEcho->Conclution}}</div>
                    </div>
                    <div class="row mt-4">
                        <label class="col-sm-4 col-label-form"><b>Recommendation</b></label>
                        <div class="col">: {{$twodEcho->Recommendation}}</div>
                    </div>

                    <div class="text-center mt-3">
                        <a type="button" class="btn btn-primary btn-lg" href="{{route('twod_echos.index')}}" style="width: 200px;">
                            {{ __('Go back!') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection