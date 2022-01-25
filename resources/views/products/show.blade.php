@extends('layouts.app')

@section('content')

<form action="{{ route('products.destroy',$product->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

<a href="{{route('products.index')}}" class="btn btn-secondary">back</a>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$product->name}}</h5>
      <p class="card-text">{{$product->description}}</p>
      <p class="card-text">{{$product->price}}</p>
      
    </div>
  </div>


@endsection