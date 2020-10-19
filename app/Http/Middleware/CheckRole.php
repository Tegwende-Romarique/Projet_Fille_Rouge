<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
       if(Auth::check()){
           if(Auth::user()->role_id == 1)
           {
               return redirect('Eleves/dashboard');
           }elseif(Auth::user()->role_id == 2){
               return redirect('Parent/dashboard');
           }elseif(Auth::user()->role_id == 3){
               return redirect('Enseignant/dashboard');
           }elseif(Auth::user()->role_id == 4){
            return redirect('Admin/dashboard');
        }elseif(Auth::user()->role_id == 5){
            return redirect('/home');
        }
       }
    }

    // if(Auth::check())
    // {
    //     if(Auth::user()->role_id == 1){
    //         return redirect('Eleves/dashboard');
    //     }
    // }elseif(Auth::user()->role_id == 2){
    //     return redirect ('Parent/dashboard');

    // }elseif(Auth::user()->role_id == 3){
    //     return redirect ('Parent/dashboard');
    // }
}
