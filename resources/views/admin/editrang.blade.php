@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edition du rang</h3>
                    <a href="{{ route('selection', $membres->id)}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">
                    <form class="form-horizontal" method="POST" action="{{ route('updaterang', $membres->id) }}">
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

                       <div class="form-group{{ $errors->has('rang') ? ' has-error' : '' }}">
                            <label for="rang" class="col-md-4 control-label">Rang dans la file d'attente</label>

                            <div class="col-md-6">
                                <input id="rang" type="rang" class="form-control" name="rang" value="{{$membres->rang}}" required>

                                @if ($errors->has('rang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rang') }}</strong>
                                    </span>
                                @endif
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