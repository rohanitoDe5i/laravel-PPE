@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Edition de la liste d'attente ou le mot de passe d'un utilisateur</h3></div>

                <div class="panel-body">

                    <table class="table">
                        <tr>
                            <th>Id utilisateur</th>
                            <th>Nom d'utilisateur</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse e-mail</th>
                            <th>Téléphone</th>
                           	<th>Rang</th>
                            <th></th>
                        </tr>
                        
                        @foreach($membres as $membre)
                        <tr>
                            <td>{{ $membre->id }}</td>
                            <td>{{ $membre->login }}</td>
                            <td>{{ $membre->nom }}</td>
                            <td>{{ $membre->prenom }}</td>
                            <td>{{ $membre->email }}</td>
                            <td>{{ $membre->tel }}</td>
                            <td>{{ $membre->rang }}</td>
                            @if(!$membre->admin)<td><a href="{{ route('selection', $membre->id) }}">Editer</a>
                            </td>
                            @else
                            <td></td>
                            @endif
                            <td></td>
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')