@extends('layout.master')

@section('content')
    <form enctype="multipart/form-data" action="{{ route('dashboard.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-9">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="schedule">Schedule</label>
                <input type="date" class="form-control" name="schedule" placeholder="">
            </div>
            <div class="form-group">
                <label for="l">Location</label>
                <input type="text" class="form-control" name="location" placeholder="location">
            </div>
            <div class="form-group">
                <label for="l">Image</label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <button class="btn btn-primary" type="submit">Save Data</button>
            <a class="btn btn-primary" href="/dashboard" role="button">Back</a>
        </div>
    </form>
@endsection
