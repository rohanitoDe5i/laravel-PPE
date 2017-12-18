@extends('layouts.app')
@section('content')
          <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div style="text-align: right; font-size: large;" >
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        Vous devez vous connecter.
                    @endauth
                </div>
            @endif


            <div class="content">
                <div style="text-align: center; font-size: xx-large;" >
                     M2L PARKING
                </div>
            </div>
            <p style="text-align: center;">Afin d’éviter le stationnement sauvage dans le labyrinthe qu’est le parking, il a été décidé d’attribuer à chaque membre qui le demandait une place de parking numérotée.</br>
            Donc nous avons décidé de mettre en place une application permettant de gérer les 
            places.</p>

        </div>

            <div class="content">
                <div style="text-align: center; font-size: xx-large;" >
                     APPLICATION SOUS DEVELOPPEMENT.
                </div>
            </div>
@endsection
