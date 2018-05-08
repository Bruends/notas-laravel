@extends('template.template') @section('content')
<section class="mt-4 container">
  <h1 class="text-center h2">Delete</h1>
  <div class="row mt-5 align-items-center">
    <div class="col mt-3 card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title h5">{{ $note->title }}</h5>
        <p class="card-text lead">
          {{ $note->text }}
        </p>
      </div>
    </div>
    <div class="col text-center">
      <form action="{{ url("/$note->id/delete") }}" method="POST">
        {{ csrf_field() }}
        <h2 class="text-center h4">Delete Note ?</h2>
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ url("/") }}" class="btn">Return</a>    
      </form>
    </div>
  </div>
</section>
@endsection