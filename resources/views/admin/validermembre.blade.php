@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Nouveau(x) Compte(s)</h3>
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
                            <th class="text-center">Téléphone</th>
                            <th class="text-center">Rang</th>
                            <th class="text-center">Action</th>
                        </thead>

                        @foreach($membres as $membre)
                        <tbody>
                            <tr>
                                @if (!$membre->valider)
                                <td >{{ $membre->id }}</td>
                                <td >{{ $membre->login }}</td>
                                <td >{{ $membre->nom }}</td>
                                <td >{{ $membre->prenom }}</td>
                                <td >{{ $membre->email }}</td>
                                <td >{{ $membre->tel }}</td>
                                <td >{{ $membre->rang }}</td>
                                <td>
                                    <a href="{{ route('updatemembre', $membre->id) }}"><button type="button" class="btn btn-primary btn-sm">Valider</button></a>
                                </td>
                                <td></td>
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