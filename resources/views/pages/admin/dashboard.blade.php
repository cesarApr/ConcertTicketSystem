@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome back, <span class="username">{{ Auth::user()->username }}</span></h1>
                </div>
                <a href="/dashboard/create"> + Add New Concert</a>
                <br>
                <div class="col-md-8 ">
                    <div class="table-center">
                        <table border="1">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Schedule</th>
                                <th>Location</th>
                                <th>Image</th>
                            </tr>
                            @foreach ($concert as $concert)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $concert->title }}</td>
                                    <td>{{ $concert->schedule }}</td>
                                    <td>{{ $concert->location }}</td>
                                    <td><img src="{{ asset('storage/'.$concert->image) }}" alt=""></td>
                                    <td>
                                        <a href="/dashboard/{{ $concert->id}}/edit">Edit</a>
                                        |
                                        <td><form action="/dashboard/{{ $concert->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">Delete</button>
                                        </form></td>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="row">
                            <div style="margin:0px 0px 0px 70px;">
                                <a class="btn btn-success" href="{{ route('print_pdf') }}">
                                    Print PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
@endsection
