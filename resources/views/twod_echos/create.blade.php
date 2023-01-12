@extends('layouts.app')

@section('content')
<div class="flex mb-3">
    <div class="max-w-7xl mx-auto lg:px-6 lg:px-8 mb-3">
        <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg mb-3">
            <div class="card border-dark" style="margin:10px;">
                <div class="card-header font-semibold text-lg">{{ __('Create a  2D Echo investigation for patient') }}</div>
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
                    <form action="{{ route('twod_echos.store') }}" method="post">
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
                                    <label for="Date" class="form-label mb-1"><b>{{ __('Date') }}</b></label>
                                    <input id="Date" type="Date" class="form-control" name="Date" placeholder="mm-dd-yyyy">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Doneby" class="form-label mb-1"><b>{{ __('Doneby') }}</b></label>
                                    <input id="Doneby" type="text" class="form-control" name="Doneby" autocomplete="Doneby">
                                </div>
                            </div>
                            </div>
                            <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LVH_PRESENT_NO" class="form-label mb-1"><b>{{ __('LVH_PRESENT_NO') }}</b></label>
                                    <input id="LVH_PRESENT_NO" type="number"  class="form-control" name="LVH_PRESENT_NO">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LVEDO" class="form-label mb-1"><b>{{ __('LVEDO') }} (mm)</b></label>
                                    <input id="LVEDO" type="number" step="0.01" class="form-control" name="LVEDO">
                                </div>
                            </div>
                            <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="IVS" class="form-label mb-1"><b>{{ __('IVS') }} (mm)</b></label>
                                    <input id="IVS" type="number" step="0.01" class="form-control" name="IVS">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LVESD" class="form-label mb-1"><b>{{ __('LVESD') }} (mm)</b></label>
                                    <input id="LVESD" type="number" step="0.01" class="form-control" name="LVESD">
                                </div>
                            </div>
                            
                            
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="PW" class="form-label mb-1"><b>{{ __('PW') }} (mm)</b></label>
                                    <input id="PW" type="number" step="0.01" class="form-control" name="PW">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LVEF" class="form-label mb-1"><b>{{ __('LVEF') }} (mm)</b></label>
                                    <input id="LVEF" type="number" step="0.01" class="form-control" name="LVEF">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LA" class="form-label mb-1"><b>{{ __('LA') }} (mm)</b></label>
                                    <input id="LA" type="number" step="0.01" class="form-control" name="LA">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="TMVA" class="form-label mb-1"><b>{{ __('TMVA') }} (mm)</b></label>
                                    <input id="TMVA" type="number" step="0.01" class="form-control" name="TMVA">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="AO" class="form-label mb-1"><b>{{ __('AO') }} (mm)</b></label>
                                    <input id="AO" type="number" step="0.01" class="form-control" name="AO">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="DMVA" class="form-label mb-1"><b>{{ __('DMVA') }} (mm)</b></label>
                                    <input id="DMVA" type="number" step="0.01" class="form-control" name="DMVA">
                                </div>
                            </div>
                            </div>
                            <div class="row items-center justify-start">
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="MV" class="form-label mb-1"><b>{{ __('MV') }} </b></label>
                                    <input id="MV" type="text"  class="form-control" name="MV" autocomplete="MV">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="MR_GRADE" class="form-label mb-1"><b>{{ __('MR_GRADE') }}</b></label>
                                    <input id="MR_GRADE" type="text"  class="form-control" name="MR_GRADE" autocomplete="MR_GRADE">
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="AV" class="form-label mb-1"><b>{{ __('AV') }} </b></label>
                                    <input id="AV" type="text"  class="form-control" name="AV" autocomplete="AV">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="PV" class="form-label mb-1"><b>{{ __('PV') }}</b></label>
                                    <input id="PV" type="text"  class="form-control" name="PV" autocomplete="PV">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="TV" class="form-label mb-1"><b>{{ __('TV') }} </b></label>
                                    <input id="TV" type="text"  class="form-control" name="TV" autocomplete="TV">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="PA" class="form-label mb-1"><b>{{ __('PA') }} </b></label>
                                    <input id="PA" type="text"  class="form-control" name="PA" autocomplete="PA">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LV_RWMD" class="form-label mb-1"><b>{{ __('LV_RWMD') }} </b></label>
                                    <input id="LV_RWMD" type="text" class="form-control" name="LV_RWMD" autocomplete="LV_RWMD" >
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="LA_LV_Clot" class="form-label mb-1"><b>{{ __('LA_LV_Clot') }} </b></label>
                                    <input id="LA_LV_Clot" type="text" class="form-control" name="LA_LV_Clot" autocomplete="LA_LV_Clot">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Pericardial_effusion" class="form-label mb-1"><b>{{ __('Pericardial_effusion') }}</b></label>
                                    <input id="Pericardial_effusion" type="text" class="form-control" name="Pericardial_effusion" autocomplete="Pericardial_effusion">
                                </div>
                                <div class="col">
                                <div class="form-group mb-3">
                                    <label for="Others" class="form-label mb-1"><b>{{ __('Others') }}</b></label>
                                    <input id="Others" type="text" class="form-control" name="Others" autocomplete="Others">
                                </div>
                            </div>
                        </div>


                        

                        <div class="row items-center justify-start">
                           
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="Conclution" class="form-label mb-1"><b>{{ __('Conclution') }}</b></label>
                                   <input id="Conclution" type="text" class="form-control" name="Conclution" autocomplete="Conclution">
                               </div>
                           </div>
                         
                         
                       </div>
                       <div class="row items-center justify-start">
                           
                           <div class="col">
                               <div class="form-group mb-3">
                                   <label for="Recommendation" class="form-label mb-1"><b>{{ __('Recommendation') }}</b></label>
                                   <input id="Recommendation" type="text" class="form-control" name="Recommendation" autocomplete="Recommendation">
                               </div>
                           </div>
                          </div>
                         

                        <div class="row mt-2 item-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg" style="float: right; width: 200px;">
                                    {{ __('Create  2D ECHO Investigation') }}
                                </button>
                            </div>
                            <div class="col">
                                <a type="button" class="btn btn-danger btn-lg" href="{{route('twod_echos.index')}}" style="width: 200px;">
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