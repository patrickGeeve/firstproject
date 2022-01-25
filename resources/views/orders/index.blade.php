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

<a class="btn btn-primary" href={{route('orders.create')}}>Create an order</a>
<a class="btn btn-primary" href="{{ route('reservations.index') }}"> To reservations</a>
<a class="btn btn-primary" href="{{ route('products.index') }}"> To products</a>
<a class="btn btn-primary" href="{{ route('talbes.index') }}"> To tables</a>
@isset($orders)
<div class="row">
    @foreach ($orders as $order)
    <div class="card col">
        <div class="card-body">
          <h5 class="card-title">{{$order->id}}</h5>
          <p class="card-text">{{$order->table_id}}</p>
          <p class="card-text">{{$order->open}}</p>
          <a href="{{route('orders.show', $order->id)}}" class="btn btn-primary">bekijk</a>
        </div>
      </div>
    @endforeach
</div>
    @else
    niks
    @endisset
@endsection