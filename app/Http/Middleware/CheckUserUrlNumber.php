<?php

namespace App\Http\Middleware;

use Closure;
use App\Link;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class CheckUserUrlNumber
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
       
        if (Auth::user()->links->count() >= 5) {
            if (Session::get('locale', Config::get('app.locale'))=='en') {
                return redirect('links')->with('error','You can only add 5 links');
            }
            else if (Session::get('locale', Config::get('app.locale'))=='fr') {
                return redirect('links')->with('error','Vous ne pouvez pas ajouter que 5 liens');
            }
            
        }

        return $next($request);
    }
}
