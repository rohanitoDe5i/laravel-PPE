@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des utilisateurs</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php
                    $iduser = auth()->user()->id;
                    $user = DB::table('users')->where('id', $iduser)->first();
                    $admin = $user->admin;
                    if($admin==1)
                    {
                        $users = DB::table('users')->get();
                        echo"<table style='border:1px solid black;border-spacing:5px'>
                         <tr>
                            <td style='border:1px solid black;padding:2px'>ID utilisateur</td>
                            <td style='border:1px solid black;padding:2px'>Nom</td>
                            <td style='border:1px solid black;padding:2px'>Prénom</td>
                            <td style='border:1px solid black;padding:2px'>E-mail</td>                           
                            <td style='border:1px solid black;padding:2px'>Place dans la file</td>
                            <td style='border:1px solid black;padding:2px'>Admin</td>
                         <tr>";
                        foreach($users as $user)
                        {
                            $iduser=$user->id;
                            $nom=$user->nom;
                            $prenom=$user->prenom;
                            $email=$user->email;
                            $placefile=$user->placefile;
                            $admin=$user->admin;
                            if($admin == 1)
                                $admin ='oui';
                            else
                                $admin ='non';
                            if(!$placefile)
                                $placefile = 'aucune';
                            echo"<tr>
                            <td style='border:1px solid black;padding:2px'>$iduser</td>
                            <td style='border:1px solid black;padding:2px'>$nom</td>
                            <td style='border:1px solid black;padding:2px'>$prenom</td>
                            <td style='border:1px solid black;padding:2px'>$email</td>                           
                            <td style='border:1px solid black;padding:2px'>$placefile</td>
                            <td style='border:1px solid black;padding:2px'>$admin</td>
                         <tr>";
                        }
                        echo"</table>";
                    }
                    else
                        echo"Vous n'êtes pas administrateur !";

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
