@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Réservation</div>

                <div class="panel-body">
            		<div class="panel-body text-center">
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
            			<a href="{{ route('home') }}"><button type="button" class="btn btn-default btn-sm">Accueil</button></a>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection