@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row mx-8">
                <div class="col-sm-12">
                    <div class="mx-4 mt-4">
                        <h3 class="font-semibold">Toe Investigations</h3>
                    </div>
                    <div>
                        <a style="margin: 10px; float:right;" href="{{route('toe_investigations.create')}}" class="btn btn-success">ADD Toe Investigation</a>
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
                        <caption>List of patient's Toe Investigation</caption>
                        <thead class="thead-dark">
                            <tr>
                                <th>Patient</th>
                                <th>Date</th>
                                <th>Doneby</th>
                                <th>Findings</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($toe_investigations) > 0)
                            @foreach($toe_investigations as $toe_investigation)
                            <tr class="table-info">
                                <td>{{$toe_investigation->patient_id}}</td>
                                <td>{{$toe_investigation->Date}}</td>
                                <td>{{$toe_investigation->Doneby}}</td>
                                <td>{{$toe_investigation->Findings}}</td>
                                <td>
                                    <form action="{{route('toe_investigations.destroy' , $toe_investigation->id)}}" method="post" style="display:inline">
                                        @method('DELETE')
                                        @csrf
                                        <a href="{{ route('toe_investigations.show', $toe_investigation->id)}}" class="btn btn-primary mr-2">VIEW</a>
                                        <a href="{{ route('toe_investigations.edit', $toe_investigation->id)}}" class="btn btn-warning mr-2">UPDATE</a>
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
                    <div class="row mx-2">{{$toe_investigations->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection