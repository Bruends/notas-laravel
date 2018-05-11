@extends('template.template') 
@section('content')
<section class="container mt-4">
  <h1 class="my-4 text-center h2">Salvar Nota</h1>
  <form action="{{ url('/add') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="title" class="lead mt-3 mb-1">Título</label>
      <input type="text" class="form-control" id="title" name="title" required>
      <label for="text" class="lead mt-3 mb-1">Texto</label>
      <textarea class="form-control" id="text" name="text" rows="4" required></textarea>
      <button type="submit" class="btn btn-success mt-2">
        salvar Nota
        <i class="fas fa-plus"></i>
      </button>
      <a href="{{ url('/') }}" class="mt-2 btn">Retornar</a>
    </div>
  </form>
</section>
@endsection