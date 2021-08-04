<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->rol == "Administrador"){
            return $next($request);
        }else{
            return abort(403, 'No tiene permitido el acceso');
        }
        
    }
}
