@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')

    {{-- <p>This is appended to the master sidebar.</p> --}}
@endsection

@section('content')
<div class="container">
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<a class="btn btn-primary" href={{route('tables.create')}}>Create a table</a>
<a class="btn btn-primary" href="{{ route('reservations.index') }}"> To reservations</a>
<a class="btn btn-primary" href="{{ route('products.index') }}"> To products</a>
@isset($tables)
<table class="table">
    <thead>
        <tr>
            <th scope="col">number</th>
            <th scope="col">number_of_persons</th>
            <th scope="col">description</th>
            <th scope="col"></th>
        </tr>
    </thead>
<tbody>
@foreach ($tables as $table)

<tr>
    <th>{{$table->number}}</th>
    <th>{{$table->number_of_persons}}</th>
    <td>{{$table->description}}</td>
    <td>

        @if($table->orders)
            <a class="btn btn-primary" href="{{ route('orders.show', ['order' => $table->orders->id]) }}"> Bewerk order</a>
        @else
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <input type="hidden" value={{$table->id}} name="dinner_table_id">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Maak nieuwe order</button>
                </div>
            </form>
        @endif
    </td>
</tr>
@endforeach
</tbody>
</table>

@else
<p> Er zijn geen doelen</p>
@endif
{{-- <div class="row">
    @foreach ($tables as $table)
    <div class="card col">
        <div class="card-body">
          <h5 class="card-title">{{$table->name}}</h5>
          <p class="card-text">{{$table->description}}</p>
          <p class="card-text">{{$table->capacity}}</p>
          <a href="{{route('tables.show', $table->id)}}" class="btn btn-primary">bekijk</a>
          {{$table->orders}}
          @if($table->orders != [])
            {{$table->orders}}
          @else
                <form action="{{ route('orders.store') }}" method="POST">
                  @csrf
                  <input type="hidden" value={{$table->id}} name="table_id">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                         <button type="submit" class="btn btn-primary">Maak order</button>
                    </div>
                </form>
          @endif
        </div>
      </div>
      
    @endforeach
</div>
    @else
    niks
    @endisset --}}
</div>
@endsection