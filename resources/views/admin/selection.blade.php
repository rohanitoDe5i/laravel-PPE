@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Edition de membres</h3>
                    <a href="{{ route('editmembre')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">
                        <table class="table table-stripped">
                            <thead>
                                <th class="text-center">Id utilisateur</th>
                                <th class="text-center">Nom d'utilisateur</th>
                                <th class="text-center">Nom</th>
                                <th class="text-center">Prenom</th>
                                <th class="text-center">Adresse e-mail</th>
                                <th class="text-center">Rang</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    @if(!$membres->admin)
                                        <td>{{ $membres->id }}</td>
                                        <td>{{ $membres->login }}</td>
                                        <td>{{ $membres->nom }}</td>
                                        <td>{{ $membres->prenom }}</td>
                                        <td>{{ $membres->email }}</td>
                                        <td>{{ $membres->rang}}</td>
                                        <td>
                                            <a href="{{ route('supprimer', $membres->id) }}">
                                                <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
                                            </a>
                                        </td>
                                    @else
                                        <td></td>
                                        <td></td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('editpwd', $membres->id) }}">
                            <button type="button" class="btn btn-warning btn-sm" style="float: center;">Modifier le mot de passe</button>
                        </a>
                        <a href="{{ route('editrang', $membres->id) }}">
                            <button type="button" class="btn btn-warning btn-sm" style="float: center;">Modifier le rang</button>
                        </a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')