@extends('layout.master')

@section('content')
    <form action="{{ route('store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-9">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="schadule">Schadule</label>
                <input type="date" class="form-control" id="schadule" placeholder="">
            </div>
            <div class="form-group">
                <label for="l">Location</label>
                <input type="text" class="form-control" id="location" placeholder="location">
            </div>
            <button class="btn btn-primary" type="submit">Save Data</button>
            <a class="btn btn-primary" href="/dashboard" role="button">Back</a>
        </div>
    </form>
@endsection
