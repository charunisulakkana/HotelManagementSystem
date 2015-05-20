@extends('index')

@section('content')

<table class="table">
    <thead>
        <th>#id</th>
        <th>Hotel Name</th>
        <th>Adress</th>
        <th>City</th>
    </thead>

@foreach ($shows as $show)

<tr>
	<td> {{ $shows->id }}</td>
	<td> {{ $shows->hotel_Name }}</td>
	<td> {{ $shows->hotel_Address }}</td>
	<td> {{ $shows->hotel_city }}</td>
</tr>

@endforeach


@stop