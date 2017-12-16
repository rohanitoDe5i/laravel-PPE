@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    
                    <?php
                    $iduser = auth()->user()->id;
                    $user = DB::table('users')->where('id', $iduser)->first();
                    $admin = $user->admin;
                    if($admin==1)
                        echo"Vous êtes administrateur";
                    else
                        echo"Vous êtes un utilisateur";

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
