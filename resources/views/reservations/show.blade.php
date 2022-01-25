@extends('layouts.app')

@section('content')

<form action="{{ route('reservations.destroy',$reservation->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger">Delete</button>
</form>

<a href="{{route('reservations.index')}}" class="btn btn-secondary">back</a>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$reservation->name}}</h5>
      <p class="card-text">{{$reservation->phone}}</p>
      <p class="card-text">{{$reservation->email}}</p>
      <p class="card-text">{{$reservation->date}}</p>
      <p class="card-text">{{$reservation->number_of_persons}}</p>
      
    </div>
  </div>


@endsection