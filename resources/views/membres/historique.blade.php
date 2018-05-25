@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Mes réservations</h3>
                    <a href="{{ route('home')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">

                    <table class="table table-stripped">
                    	<thead>
                            <th class="text-center">Numéro de place</th>
                            <th class="text-center">Date de réservation</th>
   	                        <th class="text-center">Fin de réservation</th>
   	                    </thead>
   	                    @foreach($reservations as $reservation)
                        <tbody>
                            @php
                            	$places = DB::table('places')->select('numplace')->where('idplace', '=', $reservation->idplace)->get();
                            @endphp
                            @foreach($places as $place)
                            <td> {{ $place->numplace }} </td>
                            @endforeach
                            <td> {{ $reservation->debutperiode }} </td>
                            <td> {{ $reservation->finperiode}} </td>
                        </tbody>
                        @endforeach    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')