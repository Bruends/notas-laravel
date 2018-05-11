@extends('template.template')
@section('content')
<section class="container">
  {{-- Header --}}
  <div class="mb-4 row justify-content-around bg-primary py-3">
    {{-- add button --}}
    <a href="{{ url('/add') }}" class="btn btn-success my-1" title="adicionar nota">
      Adicionar Nota &nbsp;
      <i class="fas fa-plus"></i>
    </a>
    {{-- search form --}}
    <form action="{{ url('/search') }}" class="my-1">
      <div class="input-group">
        <input type="text" class="form-control" id="search" name="title" placeholder="Procurar por título...">
        <div class="input-group-append">
          <button class="input-group-text" style="cursor: pointer;">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>

  {{-- Notes --}}
  <h1 class="text-center mt-5 h2">Notas</h1>
  <section class="row justify-content-center">
    @foreach($notes as $note) {{-- cards --}}
    <div class=" mt-3 mx-1 card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title h5">{{ $note->title }}</h5>
        <p class="card-text lead">
          {{ $note->text }}
        </p>
        <div style="width:100px" class="ml-auto text-right">
          <a href='{{ url("/$note->id/update") }}' class="btn btn-warning text-white">
            <i class="fas fa-pencil-alt"></i>
          </a>
          <a href='{{ url("/$note->id/delete") }}' class="btn btn-danger">
            <i class="fas fa-trash"></i>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </section>
  {{-- empty message --}}
  @if(count($notes) === 0)
    <div class="mt-5 text-center">
      <div>
        <span class="mt-5 h1 ">
          ¯\_(ツ)_/¯ <br/>
          Não há notas!
        </span>
      </div>
    </div>
  @endif
</section>
@endsection