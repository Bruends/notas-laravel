@extends('template.template')
@section('content')
<section class="mt-4 container">
  {{-- Header --}}
  <div class="my-4 row justify-content-around">
    {{-- add button --}}
    <a href="{{ url('/add') }}" class="btn btn-success" title="add note">
      <i class="fas fa-plus"></i>
    </a>      
    {{-- search form --}}
  <form action="{{ url('/search') }}">
      <div class="input-group">
        <input type="text" class="form-control" id="search" name="title" placeholder="Search By Title...">
        <div class="input-group-append">
          <button class="input-group-text">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>  

  {{-- Notes --}}
  <h1 class="text-center mt-5 h2">Notes</h1>  
  <section class="row justify-content-center">
    @foreach($notes as $note)
    {{-- cards --}}
      <div class=" mt-3 mx-1 card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title h5">{{ $note->title }}</h5>
          <p class="card-text lead">
            {{ $note->text }}
          </p>
        <a href='{{ url("/$note->id/update") }}' class="btn btn-warning text-white ">Edit</a>
          <a href='{{ url("/$note->id/delete") }}' class="btn btn-danger ">Delete</a>
        </div>
      </div>
    @endforeach
    </section>
</section>
@endsection