@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <img src="{{ asset('storage/'.auth()->user()->image) }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                <h2>{{ $user->name }}'s Profile</h2>
                <form enctype="multipart/form-data" action="/store/{{ auth()->user()->id }}" method="POST">
                    <label for="image" class="form-label">Update Profile Image</label>
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
                @csrf
                @method('PUT')
            </div>
        </div>
    </div>
@endsection