@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Race Name</th>
            <th scope="col">Date of race</th>
        </tr>
        </thead>
        <tbody>
        @foreach($races as $race)
        <tr>
            <th scope="row">{{ $race->id }}</th>
            <td><a href="/results/{{ $race->id }}">{{ $race->race_name }}</a></td>
            <td>{{ $race->date_of_race }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary m-lg-2" href="{{route('races.create')}}">
        Create new race
    </a>
@endsection
