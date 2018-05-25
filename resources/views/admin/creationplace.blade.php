@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Création de places de parkings</h3>
                    <a href="{{ route('editplace')}}">
                        <button type="button" class="btn btn-primary fa fa-chevron-left" style="float: left;"> Retour</button>
                    </a>
                </div>

                <div class="panel-body text-center" style="height: 400px; overflow-y: scroll; width: 100%;">
                    <form class="form-horizontal" method="POST" action="{{ route('added') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="method" value="PUT">


                        <div class="form-group{{ $errors->has('nbplace') ? ' has-error' : '' }}">
                            <label for="nbplace" class="col-md-4 control-label">Nombre de places à ajouter</label>
                                <div class="col-md-6">
                                    <input id="nbplace" type="nbplace" class="form-control" name="nbplace" required>

                                    @if ($errors->has('nbplace'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nbplace') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary btn-sm" value="Submit Button">Créer</button>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')