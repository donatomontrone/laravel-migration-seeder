@extends('layouts.app')

@section('main-content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h2>Partenze</h2>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">
                                Vettore
                            </th>
                            <th scope="col">
                                Treno
                            </th>
                            <th scope="col">
                                Destinazione
                            </th>
                            <th scope="col">
                                Partenza
                            </th>
                            <th scope="col">
                                Arrivo
                            </th>
                            <th scope="col">
                                N. Carrozze
                            </th>
                            <th scope="col">
                                Ritardo
                            </th>
                            <th scope="col">
                                Cancellato
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                        <tr>
                            <th scoper="row">{{$train->company}}
                            </th>
                            <td>{{$train->train_code}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                            <td>{{$train->carriages_number}}</td>
                            <td>
                                @if ($train->is_on_time == false)
                                    @php
                                        echo rand(10,50) . ' min';
                                    @endphp 
                                @endif
                            </td>
                            <td class="fw-bold">
                                @if ($train->is_deleted == true)
                                    Cancellato
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-10">
                <h2>Arrivi</h2>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">
                                Vettore
                            </th>
                            <th scope="col">
                                Treno
                            </th>
                            <th scope="col">
                                Provenienza
                            </th>
                            <th scope="col">
                                Partenza
                            </th>
                            <th scope="col">
                                Arrivo
                            </th>
                            <th scope="col">
                                N. Carrozze
                            </th>
                            <th scope="col">
                                Ritardo
                            </th>
                            <th scope="col">
                                Cancellato
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                        <tr>
                            <th scoper="row">{{$train->company}}
                            </th>
                            <td>{{$train->train_code}}</td>
                            <td>{{$train->departure_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                            <td>{{$train->carriages_number}}</td>
                            <td>
                                @if ($train->is_on_time == false)
                                    @php
                                        echo rand(10,50) . ' min';
                                    @endphp 
                                @endif
                            </td>
                            <td class="fw-bold">
                                @if ($train->is_deleted == true)
                                    Cancellato
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection