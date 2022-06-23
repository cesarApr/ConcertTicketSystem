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
                                <th>Id</th>
                                <th>Title</th>
                                <th>Schadule</th>
                                <th>Location</th>
                            </tr>
                            @foreach ($concert as $concert)
                                <tr>
                                    <td>{{ $concert->id }}</td>
                                    <td>{{ $concert->title }}</td>
                                    <td>{{ $concert->schadule }}</td>
                                    <td>{{ $concert->location }}</td>
                                    <td>
                                        <a href="/dashboard/edit/{{ $concert->id }}">Edit</a>
                                        |
                                        <a href="/dashboard/destroy/{{ $concert->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
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
