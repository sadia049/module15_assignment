<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $username='sadia';
        $pass=12345;
        $name=$request->name;
        $password=$request->pass;

        if($name==$username && $pass==$password )
              return $next($request);

        else
            return redirect('/',302);
    }
}
