@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edition de mon mot de passe</h3>
                    <a href="{{ route('profilemembre')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">
                    <form class="form-horizontal" method="POST" action="{{ route('updatepwdmembre') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="method" value="PUT">

                        <table class="table table-stripped">
                            <thead>
                                <th>Nom d'utilisateur</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse e-mail</th>
                            </thead>

                            <tbody>
                                    <td>{{ Auth::User()->login }}</td>
                                    <td>{{ Auth::User()->nom }}</td>
                                    <td>{{ Auth::User()->prenom }}</td>
                                    <td>{{ Auth::User()->email }}</td>
                                    <td>
                            </tbody>
                        </table> 
                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" autocomplete="off">
                            <label for="password" class="col-md-4 control-label">Nouveau mot de passe</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirmer le nouveau mot de passe</label>

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