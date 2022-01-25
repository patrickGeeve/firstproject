@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<a class="btn btn-primary" href={{route('products.create')}}>Create product</a>
<a class="btn btn-primary" href="{{ route('reservations.index') }}"> To reservations</a>
<a class="btn btn-primary" href="{{ route('tables.index') }}"> to tables</a>
@isset($products)
<div class="row">
    @foreach ($products as $product)
    <div class="card col">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
          <p class="card-text">{{$product->description}}</p>
          <p class="card-text">{{$product->price}}</p>
          <a href="{{route('products.show', $product->id)}}" class="btn btn-primary">bekijk</a>
        </div>
      </div>
    @endforeach
</div>
    @else
    niks
    @endisset
@endsection