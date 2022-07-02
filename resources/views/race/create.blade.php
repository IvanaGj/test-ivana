@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    {{ Session::get('flash_message') }}
                </div>
            @endif

            <a class="btn btn-primary" href="{{route('races.index')}}">
                {{strtoupper('Back to list of races')}}
            </a>

            <div class="col-12">
                <form action="{{route('races.store', $race->id)}}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="race_name" class="col-md-4 col-form-label text-md-right">RACE NAME</label>
                        <div class="col-md-6">
                            <input id="race_name" type="text" class="form-control" name="race_name"
                                   placeholder="Enter the name of the race" autocomplete="race_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_of_race" class="col-md-4 col-form-label text-md-right">DATE OF THE RACE</label>
                        <div class="col-md-6">
                            <input id="date_of_race" type="datetime-local" class="form-control" name="date_of_race"
                                   autocomplete="date_of_race" required>
                        </div>
                    </div>
                    <div class="form-group row">

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">SAVE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
