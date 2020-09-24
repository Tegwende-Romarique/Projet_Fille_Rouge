<?php

namespace App\Http\Middleware;

use Closure;

class Statut
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
        if(auth()->user()->statut ==1)

        {
            return $next($request);
        }
      return redirect('Etablissement/forme-etablissement');  
    }
    
}
