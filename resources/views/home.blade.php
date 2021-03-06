@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté !

                    
                    <?php
                    $iduser = auth()->user()->id;
                    $user = DB::table('users')->where('id', $iduser)->first();
                    $admin = $user->admin;
                    if($admin==1)
                        echo"<br>Espace administrateur :
                             <br><a href='liste_utilisateur'>-Liste des utilisateurs</a>
                             <br><a href='liste_place'>-Liste des places</a>";
                    else
                        echo"<br>Espace utilisateur :
                             <br><a href='places'>Vos places</a>
			     <br><a href='demande_placeutil'>Demander une place</a>"

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
