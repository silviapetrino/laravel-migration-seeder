@extends('layouts.main')


@section('content')
<h1>Trains table</h1>
    @foreach ($trains as $train)

        <ul class="card bg-secondary p-2 m-2 list-unstyled">
            <li><span>Train id:</span> {{ $train->id }}</li>
            <li><span>Train code:</span> {{ $train->train_code }}</li>
            <li><span>Company: </span>  {{ $train->company }}</li>
            <li><span>Departure station: </span> {{ $train->departure_station }}</li>
            <li><span>Arrival station: </span> {{ $train->arrival_station }}</li>
            <li><span>Departure time: </span> {{ $train->departure_time }}</li>
            <li><span>Arrival time: </span> {{ $train->arrival_time }}</li>
            <li><span>Carriage n°: </span> {{ $train->number_of_carriages }}</li>
            <li><span>On time: </span> {{ ($train->on_time) ? 'Yes' : 'is delayed' }}</li>
            <li><span>Canceled: </span> {{ ($train->canceled) ? 'Yes' : 'is calceled' }}</li>
        </ul>

    @endforeach

@endsection
