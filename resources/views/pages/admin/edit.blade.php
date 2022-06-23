@extends(layout.master)

@section('content')
<div class="card uper">
    <div class="card-header">
      Edit Concert Data
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
        <form method="post" action="{{ route('dashboard.update', $concert->id ) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $concert->title }}"/>
            </div>
            <div class="form-group">
                <label for="schadule">Schadule</label>
                <input type="date" class="form-control" name="schadule" value="{{ $concert->schadule }}"/>
            </div>
            <div class="form-group">
                <label for="location">Schadule</label>
                <input type="text" class="form-control" name="location" value="{{ $concert->location }}"/>
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
        </form>
    </div>
  </div>
@endsection
