@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row row-cols-2 g-4">
            @forelse ($trains as $train)
                <div class="col">
                    <div class="card">
                        <div class="card-body bg-dark text-white rounded-1">
                            <h6>{{ 'Azienda: ' . $train->company }}</h6>
                            <h6>{{ 'Stazione di partenza: ' . $train->departure_station }}</h6>
                            <h6>{{ 'Stazione di arrivo: ' . $train->arrival_station }}</h6>
                            <h6>{{ 'Orario di partenza: ' . $train->departure_time }}</h6>
                            <h6>{{ 'Orario di arrivo: ' . $train->arrival_time }}</h6>
                            <h6>{{ 'Codice Treno: ' . $train->train_id }}</h6>
                            <h6>{{ 'Numero Carrozze: ' . $train->wagons_number }}</h6>
                            <h6>{{ 'In Orario: ' . $train->is_in_time }}</h6>
                            <h6>{{ 'Cancellato: ' . $train->is_cancelled }}</h6>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
@endsection
