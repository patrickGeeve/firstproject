@extends('layouts.app')

@section('content')

<form action="{{ route('tables.destroy',$table->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

<a href="{{route('tables.index')}}" class="btn btn-secondary">back</a>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$table->name}}</h5>
      <p class="card-text">{{$table->description}}</p>
      <p class="card-text">{{$table->capacity}}</p>
      
    </div>
  </div>


@endsection