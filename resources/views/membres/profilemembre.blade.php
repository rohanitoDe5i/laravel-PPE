@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Mon profil</h3>
                    <a href="{{ route('home')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">

                    <table class="table table+stripped">
                        <thead>
                            <th class="col-md-2">Nom d'utilisateur</th>
                            <th class="col-md-2">Nom</th>
                            <th class="col-md-2">Prenom</th>
                            <th class="col-md-2">Adresse e-mail</th>
                            <th class="col-md-2">Téléphone</th>

                        </thead>
                        <tbody>
                            <td >{{ Auth::User()->login }}</td>
                            <td >{{ Auth::User()->nom }}</td>
                            <td >{{ Auth::User()->prenom }}</td>
                            <td >{{ Auth::User()->email }}</td>
                            <td >{{ Auth::User()->tel }}</td>
                        </tbody>  
                    </table>
                        <a href="editprofile" title="Modifier ses informations">
                            <button type="button" class="btn btn-warning btn-sm">Modifier ses informations</button>
                        </a>
                        <a href="editpwdmembre" title="Modifier son mot de passe">
                            <button type="button" class="btn btn-warning btn-sm">Modifier son mot de passe</button>
                        </a>                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')