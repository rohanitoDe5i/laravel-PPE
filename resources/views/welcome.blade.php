@extends('layouts.app')
@section('content')
          <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        Vous devez vous connecter.
                    @endauth
                </div>
            @endif


            <div class="content">
                <div class="title m-b-md">
                     M2L PARKING
                </div>
            </div>
        </div>
@endsection
