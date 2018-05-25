@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Espace Administrateur</h3>
                </div>
                
                <div class="panel-body" style="height: 400px; overflow-y: scroll; width: 100%;">
                    <div class="list-group">
                            <a href="editmembre" class="list-group-item" title="Gérer la liste des membres">Membres <i class="fa fa-chevron-right" style="float: right; font-size: 24px"></i></a>
                            <a href="editplace" class="list-group-item" title="Gérer la liste des places de parkings">Places de parkings <i class="fa fa-chevron-right" style="float: right; font-size: 24px"></i></a>
                            <a href="ajoutplace" class="list-group-item" title="Attribuer une place manuellement">Attribuer des places <i class="fa fa-chevron-right" style="float: right; font-size: 24px"></i></a>
                            <a href="listeattente" class="list-group-item" title="Consulter la liste d'attente">File d'attente <i class="fa fa-chevron-right" style="float: right; font-size: 24px"></i></a>
                            <a href="historiqueplace" class="list-group-item" title="Consulter l'historique de l'attribution des places">Historique <i class="fa fa-chevron-right" style="float: right; font-size: 24px"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection