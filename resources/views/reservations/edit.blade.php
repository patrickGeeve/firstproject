@extends('layouts.app')

<!DOCTYPE html>
<html>
<head>
    <title>reservations</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('reservations') }}"></a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('reservations') }}">View All reservations</a></li>
        <li><a href="{{ URL::to('reservations/create') }}">Create a reservation</a>
    </ul>
</nav>

<h1>All the reservations</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>shark Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($reservations as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            {{-- <td>{{ $value->shark_level }}</td> --}}

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the shark (uses the destroy method DESTROY /sharks/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the shark (uses the show method found at GET /sharks/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('reservations/' . $value->id) }}">Show this reservation</a>

                <!-- edit this shark (uses the edit method found at GET /sharks/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('reservations/' . $value->id . '/edit') }}">Edit this reservation</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>