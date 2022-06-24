<!DOCTYPE html>
<html>
<head>
    <title>Create PDF Report with DOMPDF Laravel</title>
</head> 
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Dashboard Report</h4>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Title</th>
                <th>Schedule</th>
                <th>Location</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dashboard as $d)
            <tr>
                <td>{{$d->title}}</td>
                <td>{{$d->schedule}}</td>
                <td>{{$d->location}}</td>
                <td><img src="{{ asset('storage/'.$d->image) }}" alt=""></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>