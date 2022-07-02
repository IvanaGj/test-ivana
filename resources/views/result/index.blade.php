@extends('layouts.app')

@section('content')



        <div class="col-12">
            <h1>
                Race Name <strong style="color: #212121">{{ $race->race_name}}</strong>
            </h1>
        </div>




    <div class="col-12">
        <h5>Race Average Time: <strong style="color: #20ae16">{{ $avrTimeMedium }}</strong> and Distance Medium</h5>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Placement</th>
                <th scope="col">Full Name</th>
                <th scope="col">Distance</th>
                <th scope="col">Time</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($raceResultsMedium as $index => $result)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td>{{ $result->full_name }}</td>
                    <td>{{ $result->distance }}</td>
                    <td><h4 style="color: #ff0000">{{ $result->time }}</h4></td>
                    <td><a href="/results/edit/{{ $result->id }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="/results/delete/{{ $result->id }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>


        <h5>Race Average Time: <strong style="color: #20ae16">{{ $avrTimeLong }}</strong> and Distance Long</h5>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Placement</th>
                <th scope="col">Full Name</th>
                <th scope="col">Distance</th>
                <th scope="col">Time</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($raceResultsLong as $index => $result)
                <tr>
                    <th scope="row">{{ $index+1 }}</th>
                    <td>{{ $result->full_name }}</td>
                    <td>{{ $result->distance }}</td>
                    <td><h4 style="color: red">{{ $result->time }}</h4></td>
                    <td><a href="/results/edit/{{ $result->id }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="/results/delete/{{ $result->id }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <a class="btn btn-primary m-lg-2" href="{{ route('results.create', $race->id) }}">
            Upload CSV
        </a>
    </div>


@endsection
