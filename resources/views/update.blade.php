@extends('template.template')
@section('content')
<section class="container mt-4">
  <h1 class="my-4 text-center h2">Update Note</h1>
  <form action="{{ url("/$note->id/update") }}" method="POST">
    {{ csrf_field() }}
      <div class="form-group">
        <label for="title" class="lead mt-3 mb-1">Title</label>
        <input type="text" class="form-control" id="title" name="title" required value={{ $note->title }}>       
        <label for="text" class="lead mt-3 mb-1">Text</label>
        <textarea class="form-control" id="text" name="text" rows="4" required >{{ 
          $note->text 
        }}</textarea>
        <button type="submit" class="btn btn-primary mt-2">Update Note</button>
        <a href="{{ url('/') }}" class="mt-2 btn">Return To Home</a>
      </div>
  </form>
</section>
@endsection