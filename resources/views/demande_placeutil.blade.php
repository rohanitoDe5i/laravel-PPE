@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Demande de place</div>
                    
                <div class="panel-body">
                	<form action="" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                		<div for="nom">
                			<label>Nom : </label>
                			<input type="text" name="nom" id="nom">
                		</div>
                		<div for="prenom">
                			<label>Prenom : </label>
                			<input type="text" name="prenom" id="prenom">
                		</div>
                		<div for="email">
                			<label>Email : </label>
                			<input type="text" name="email" id="email">
                		</div>
                		<div for="place">
                			<label>N°place : </label>
                			<select name="numplace" id="numplace">
                				<?php
                					for ($i=1; $i <= 100; $i++) 
                					{
                						echo"<option value='place'>$i</option>";
                					}
                				?>
                			</select>
                		</div>
                		<div for="date_debut">
                			<label>date de debut : </label>
                			<input type="date" name="dateDebut" id="dateDebut">
                		</div>
                		<div for="date_fin">
                			<label>date de fin : </label>
                			<input type="date" name="dateFin" id="dateFin">
                		</div>
                		<div class="button">
                			<button type="submit">Valider</button>
                		</div>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
