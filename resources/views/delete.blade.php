@extends('template.template') @section('content')
<section class="pt-5 container">
  <h1 class="text-center h2">Deletar</h1>
  <div class="row mt-5 align-items-center">
    <div class="col mt-3 card">
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
        <h2 class="text-center h4">Deletar Nota ?</h2>
        <button type="submit" class="btn btn-danger">
          Deletar <i class="fas fa-trash"></i>
        </button>
        <a href="{{ url("/") }}" class="btn">Retornar</a>    
      </form>
    </div>
  </div>
</section>
@endsection