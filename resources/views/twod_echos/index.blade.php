@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Special Investication-2D ECHO</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('twod_echos.create')}}" class="btn btn-success">ADD 2D ECHO</a>
                    </div>
                    <!-- success alert message -->
                    <div class="flex justify-center mt-4">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                        @endif
                    </div>

                    <!-- table -->
                    <table class="table table-lg table-hover mx-4">
                        <caption>List of patient's special investication-2d echo</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>Doneby</th>
                                
                                <th>Pericardial_effusion</th>
                                <th>Others</th>
                                <th>Conclution</th>
                                <th>Recommendation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($twod_echos) > 0)
                            @foreach($twod_echos as $twod_echo)
                            <tr class="table-info">
                                <td>{{$twod_echo->patient_id}}</td>
                                <td>{{$twod_echo->Date}}</td>
                                <td>{{$twod_echo->Doneby}}</td>
                                
                                
                                <td>{{$twod_echo->Pericardial_effusion}}</td>
                                <td>{{$twod_echo->Others}}</td>
                                <td>{{$twod_echo->Conclution}}</td>
                                <td>{{$twod_echo->Recommendation}}</td>

                                <td>
                                    <form action="{{route('twod_echos.destroy' , $twod_echo->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('twod_echos.show', $twod_echo->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('twod_echos.edit',$twod_echo->id)}}" class="btn btn-warning mr-2">UPDATE</a>
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this data?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">No Data Found</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="row mx-2">{{$twod_echos->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection