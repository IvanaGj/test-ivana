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
                Back to list of results
            </a>

            <div class="col-12">
                <form action="{{ route('results.store', $race->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="file" class="col-md-4 col-form-label text-md-right">Upload Results</label>
                        <div class="col-md-6">
                            <input id="file" type="file" class="form-control" name="file" autocomplete="race_name"
                                   required>
                        </div>
                    </div>

                    @error('file')

                    <strong class="btn-danger">{{ $message }}</strong>

                    @enderror

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
