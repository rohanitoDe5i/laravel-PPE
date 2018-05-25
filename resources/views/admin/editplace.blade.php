@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Liste des places de parkings</h3>
                    <a href="{{route('creation')}}">
                        <button type="button" class="btn btn-primary btn-sm" style="float: right;">Créer des places de parking</button>
                    </a>
                    <a href="{{ route('admin')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">

                    <table class="table table-stripped">
                        <thead>
                            <th class="text-center">Id place</th>
                            <th class="text-center">Numéro de place</th>
                            <th class="text-center">Statut</th>
                            <th class="text-center">Sélectionner</th>
                        </thead>
                        @foreach($places as $place)
                        <tbody>
                            <tr>
                                <td> {{ $place->idplace }} </td>
                                <td> {{ $place->numplace}} </td>
                                
                                    @if($place->reserver == 1)
                                        <td><span class="fa fa-unlock"></span></td>
                                    @else
                                        <td><span class="fa fa-lock"></span></td>
                                    @endif
                                <td>
                                    <a href="{{ route('selectionplace', $place->idplace) }}"><button type="button" class="btn btn-primary btn-sm">Sélectionner</button></a>
                                </td>
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