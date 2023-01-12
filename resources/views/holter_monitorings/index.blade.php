@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Holter Monitoring</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('holter_monitorings.create')}}" class="btn btn-success">ADD Holter Monitoring</a>
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
                                <th>Date</th>
                               
                                <th>Conclusion</th>
                                <th>Recommendation</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($holter_monitorings) > 0)
                            @foreach($holter_monitorings as $holter_monitoring)
                            <tr class="table-info">
                                <td>{{$holter_monitoring->patient_id}}</td>
                                <td>{{$holter_monitoring->Date}}</td>
                                
                                <td>{{$holter_monitoring->Conclusion}}</td>
                                <td>{{$holter_monitoring->Recommendation}}</td>
                                <td>
                                    <form action="{{route('holter_monitorings.destroy' , $holter_monitoring->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('holter_monitorings.show', $holter_monitoring->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('holter_monitorings.edit', $holter_monitoring->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$holter_monitorings->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection