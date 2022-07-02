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
                Back to list of races
            </a>

            <div class="col-12">
                <form action="{{route('results.update', $result->id)}}" method="POST">
                    @csrf

                    <div class="form-group row">
                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                        <div class="col-md-6">
                            <input id="full_name" type="text" class="form-control" name="full_name"
                                   autocomplete="race_name" value="{{ $result->full_name }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="time" class="col-md-4 col-form-label text-md-right">Race Time</label>
                        <div class="col-md-6">
                            <input id="time" type="time" step="1" class="form-control" name="time" autocomplete="time"
                                   required value="{{ $result->time }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="distance" class="col-md-4 col-form-label text-md-right">Distance</label>
                        <div class="col-md-6">
                            <select class="form-control" name="distance">
                                <option value="medium" @if($result->distance === "medium") selected @endif>Medium</option>
                                <option value="long" @if($result->distance === "long") selected @endif>Long</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="race" class="col-md-4 col-form-label text-md-right">Race</label>
                        <div class="col-md-6">
                            <select class="form-control" name="race_id">
                                @foreach($races as $race)
                                    <option value="{{ $race->id }}" @if($race->id === $result->race_id) selected @endif >{{ $race->race_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">

                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
