@extends('layouts.app')

@section('content')

    <h1>TUTTI I TRENI</h1>

    <h2>
        <a href="/today">TRENI DI OGGI</a>
    </h2>


    <div class="my-cards-container">
        @foreach ($trains as $train)
        <div class="card" >
            <div class="card-body">
            <h5 class="card-title">{{ $train->agency }} {{ $train->departure_station}} -> {{$train->arrival_station}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">PARTENZA: {{ $train->departure_time }} <br> ARRIVO: {{ $train->arrival_time }}</h6>
            <p class="card-text"><strong>CODICE TRENO:</strong>  {{ $train->train_code }}</p>
            <p class="card-text"><strong>N° CARROZZE:</strong>  {{ $train->carriages_number }}</p>
            <p class="card-text">
                
                @if ($train->in_time == 1)
                    <strong>IN ORARIO</strong>
                @else
                <strong>IN RITARDO</strong>
                @endif
            </p>
            @if ($train->deleted == 1)
                <h3 class="card-text text-danger">
                        CANCELLATO
                </h3>
            @endif
            
            </div>
        </div>
        @endforeach
    </div>

    

@endsection