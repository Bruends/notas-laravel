@extends('template.template')
@section('content')
<section class="container mt-4">
  <h1 class="my-4 text-center h2">New Note</h1>
  <form action="{{ url('/add') }}" method="POST">
    {{ csrf_field() }}
      <div class="form-group">
        <label for="title" class="lead mt-3 mb-1">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
        <label for="text" class="lead mt-3 mb-1">Text</label>
        <textarea class="form-control" id="text" name="text" rows="4" required></textarea>
        <button type="submit" class="btn btn-success mt-2">Save Note</button>
        <a href="{{ url('/') }}" class="mt-2 btn">Return To Home</a>
      </div>
  </form>
</section>
@endsection