@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Historique des réservations</h3>
                    <a href="{{ route('admin')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">

                    <table class="table table-stripped">
                    	<thead>
                            <th class="text-center">Numéro de place</th>
                            <th class="text-center">Début de réservation</th>
   	                        <th class="text-center">Fin de réservation</th>
   	                        <th class="text-center">Réservation Valider</th>
   	                    </thead>
                        @foreach($reservations as $reservation)
                        <tbody>
                            <tr>
                                	<td> {{ $reservation->idplace }} </td>
                                	<td> {{ $reservation->debutperiode }} </td>
                                	<td> {{ $reservation->finperiode}} </td>
                                @if($reservation->valider == 1)
                                   	<td><span class="fa fa-check"></span></td>

                                @else
                                    <td><span class="fa fa-remove"></span></td>
                                @endif
                            </tr>
                        </tbody>
                        @endforeach
    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')