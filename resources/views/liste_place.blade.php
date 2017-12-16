@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Liste des places du parking</div>

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
                        $places = DB::table('place')->get();
                        echo"<table style='border:1px solid black;border-spacing:5px'>
                         <tr>
                            <td style='border:1px solid black;padding:2px'>Place</td>
                            <td style='border:1px solid black;padding:2px'>Nom utilisateur</td>
                         <tr>";
                        foreach($places as $place)
                        {
                            $numplace=$place->numplace;
                            $user = DB::table('users')->join('attribuer','id','=','iduser')->where('numplace', $numplace)->first();
                            if($user)
                                $nom=$user->nom;
                            else
                                $nom='';
                            echo"<tr>
                                    <td style='border:1px solid black;padding:2px'>$numplace</td>
                                    <td style='border:1px solid black;padding:2px'>$nom</td>
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
