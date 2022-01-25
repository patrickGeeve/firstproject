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

<a class="btn btn-primary" href={{route('reservations.create')}}>Create reservation</a>
<a class="btn btn-primary" href="{{ route('products.index') }}"> To products</a>
<a class="btn btn-primary" href="{{ route('tables.index') }}"> to tables</a>
@isset($reservations)
<div class="row">
    @foreach ($reservations as $reservation)
    <div class="card col">
        <div class="card-body">
          <h5 class="card-title">{{$reservation->name}}</h5>
          <p class="card-text">{{$reservation->phone}}</p>
          <p class="card-text">{{$reservation->email}}</p>
          <p class="card-text">{{$reservation->date}}</p>
          <p class="card-text">{{$reservation->number_of_persons}}</p>
          <a href="{{route('reservations.show', $reservation->id)}}" class="btn btn-primary">bekijk</a>
        </div>
      </div>
    @endforeach
</div>
    @else
    niks
    @endisset
@endsection