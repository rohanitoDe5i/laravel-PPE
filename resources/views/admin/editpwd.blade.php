@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edition du mot de passe</h3>
                    <a href="{{ route('selection', $membres->id)}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">
                    <form class="form-horizontal" method="POST" action="{{ route('updatepwd', $membres->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="method" value="PUT">

                        <table class="table table-stripped">
                            <thead>
                                <th class="text-center">Id utilisateur</th>
                                <th class="text-center">Nom d'utilisateur</th>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Prenom</th>
                                <th class="text-center">Adresse e-mail</th>
                            </thead>

                            <tbody>
                                @if(!$membres->admin)
                                    <td>{{ $membres->id }}</td>
                                    <td>{{ $membres->login }}</td>
                                    <td>{{ $membres->nom }}</td>
                                    <td>{{ $membres->prenom }}</td>
                                    <td>{{ $membres->email }}</td>
                                    <td>
                                @else
                                    <td></td>
                                    <td></td>
                                @endif
                            </tbody>
                        </table> 
                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmer le mot de passe</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning btn-sm" value="Submit Button">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')