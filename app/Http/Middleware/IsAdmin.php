<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::User()->admin == 1) 
        {    
            return $next($request);
        }

        echo'<script>alert("Vous ne pouvez accéder à cette page"); window.location.href="/"</script>';
  }
}
