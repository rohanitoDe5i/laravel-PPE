@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vos places</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <?php
                    $today=date('Y-m-d H:i:s');
                    $iduser = auth()->user()->id;
                    $user = DB::table('users')->where('id', $iduser)->first();
                    $admin = $user->admin;
                    echo"Votre place courrante : ";
                    $reqplacecourrant=DB::table('place')->join('attribuer', 'place.numplace', '=', 'attribuer.numplace')->where([['horairedebut' ,'<=', $today],['horairefin' ,'>=', $today]])->first();
                    if($reqplacecourrant)
                    {
                        $placecourrant=$reqplacecourrant->numplace;
                        echo"$placecourrant";
                    }
                    else
                        echo"Aucune";

                    $places = DB::table('place')->join('attribuer', 'place.numplace', '=', 'attribuer.numplace')->where('iduser' ,'=',$iduser)->orderBy('horairefin', 'desc')->get();

                    echo"<br>Historique de vos places
                         <br><table style='border:1px solid black;border-spacing:5px'>
                         <tr>
                            <td style='border:1px solid black;padding:2px'>Numero de place</td>
                            <td style='border:1px solid black;padding:2px'>Date de début</td>
                            <td style='border:1px solid black;padding:2px'>Date de fin</td>
                         <tr>";

                    foreach ($places as $place) {
                        $numplace=$place->numplace;
                        $debut=$place->horairedebut;
                        $fin=$place->horairefin;
                        echo "<tr>
                                <td style='border:1px solid black;padding:2px'>$numplace</td>
                                <td style='border:1px solid black;padding:2px'>$debut</td>
                                <td style='border:1px solid black;padding:2px'>$fin</td>
                              </tr>";

                    }
                    echo"</table>";

                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection