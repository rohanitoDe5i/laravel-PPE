@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Attribution de la place</h3>
                    <a href="{{ route('ajoutplace')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">

                    <form class="form-horizontal" method="POST" action="{{ route('updateplace', $membre->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="method" value="PUT">
                    <table class="table table-stripped">
                        <thead>
                            <th class="text-center">Id utilisateur</th>
                            <th class="text-center">Login</th>
                            <th class="text-center">Nom</th>
                            <th class="text-center">Prénom</th>
                            <th class="text-center">Adresse e-mail</th>
                            <th class="text-center">Téléphone</th>
                            <th class="text-center">Numéros de place</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td >{{ $membre->id }}</td>
                                <td >{{ $membre->login }}</td>
                                <td >{{ $membre->nom }}</td>
                                <td >{{ $membre->prenom }}</td>
                                <td >{{ $membre->email }}</td>
                                <td >{{ $membre->tel }}</td>
                                <td >{{ $numplace->numplace }}</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="form-group{{ $errors->has('debutperiode') ? ' has-error' : '' }}">
                        <label for="debutperiode" class="col-md-4 control-label">Début de réservation</label>
                        <div class="col-md-6">
                            <input id="debutperiode" type="text" class="form-control" name="debutperiode" placeholder="{{$reservation->debutperiode}}" required autofocus>

                            @if ($errors->has('debutperiode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('debutperiode') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('finperiode') ? ' has-error' : '' }}">
                        <label for="finperiode" class="col-md-4 control-label">Fin de réservation</label>
                        <div class="col-md-6">
                            <input id="finperiode" type="text" class="form-control" name="finperiode" placeholder="{{$reservation->finperiode}}" required autofocus>

                            @if ($errors->has('finperiode'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('finperiode') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-sm" value="Submit Button">Valider</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')