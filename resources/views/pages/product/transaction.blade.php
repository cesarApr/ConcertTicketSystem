@extends('layout.master')

@section('content')
<form enctype="multipart/form-data" action="{{ route('transaction.store') }}" method="post">
    {{ csrf_field() }}
    <div class="col-md-9">
        <div class="form-group">
            <label for="user_id">User ID</label>
            <input type="text" class="form-control" name="user_id" value="">
        </div>
        <div class="form-group">
            <label for="concert_id">Concert ID</label>
            <input type="text" class="form-control" name="concert_id" value="">
        </div>
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
            <label for="qty">Qty</label>
            <input type="number" class="form-control" name="qty" placeholder="">
        </div>
        <button class="btn btn-primary" type="submit">Save Data</button>
        <a class="btn btn-primary" id="btnSubmit" href="/ticket/hololive" role="button">Back</a>
    </div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("button").click(function(){
            $('#btnSubmit').click(function(){
                alert("Payment Success!!!");
            });
          });
        });
    </script>
@endsection
