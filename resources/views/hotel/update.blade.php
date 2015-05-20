@extends('index')

@section('content')


<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">

            <h3 class="panel-title"><strong>View Hotel</strong> Details</h3>
        </div>

            <div class="panel-body">                                                                        

                <div class="row">

                    <div class="col-md-12">

                        <table class="table">
                            <thead>
                                <th>#id</th>
                                <th>Hotel Name</th>
                                <th>Adress</th>
                                <th>City</th>
                                <th>Delete</th>
                            </thead>

                        @foreach ($update as $update)

                        <tr>
                        	<td> {{ $update->id }}</td>
                        	<td> {{ $update->hotel_Name }}</td>
                        	<td> {{ $update->hotel_Address }}</td>
                        	<td> {{ $update->hotel_city }}</td>

                        	
                        	<td><a href="{{ action('UpdateController@destroy', $update->id) }}" class="fa fa-times-circle"></a></td>

                        </tr>

                        @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>


  

@endsection