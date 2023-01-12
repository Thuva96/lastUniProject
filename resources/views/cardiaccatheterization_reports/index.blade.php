@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Cardiac Catheterization reports</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('cardiaccatheterization_reports.create')}}" class="btn btn-success">ADD Cardiac Catheterization report</a>
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
                        <caption>List of patient's Stress Echos Investigation</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Cath No</th>
                                <th>Aortic Pressure</th>
                                <th>Catheter_use</th>
                                
                                <th>Conclution</th>
                                
                                <th>Recommendation</th>
                                <th>Consultant_cardiologist</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($cardiaccatheterization_reports) > 0)
                            @foreach($cardiaccatheterization_reports as $cardiaccatheterization_report)
                            <tr class="table-info">
                                <td>{{$cardiaccatheterization_report->patient_id}}</td>
                                <td>{{$cardiaccatheterization_report->Cath_No}}</td>
                                <td>{{$cardiaccatheterization_report->Aortic_Pressure}}</td>
                                <td>{{$cardiaccatheterization_report->Catheter_use}}</td>
                                <td>{{$cardiaccatheterization_report->Conclution}}</td>
                                <td>{{$cardiaccatheterization_report->Recommendation}}</td>
                                <td>{{$cardiaccatheterization_report->Consultant_cardiologist}}</td>
                                <td>{{$cardiaccatheterization_report->Date}}</td>
                                <td>
                                    <form action="{{route('cardiaccatheterization_reports.destroy' , $cardiaccatheterization_report->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('cardiaccatheterization_reports.show', $cardiaccatheterization_report->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('cardiaccatheterization_reports.edit', $cardiaccatheterization_report->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$cardiaccatheterization_reports->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection