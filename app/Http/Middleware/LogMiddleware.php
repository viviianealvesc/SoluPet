<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao): Response
    {
        
        if($metodo_autenticacao === 'padao') {
            echo 'essa é a autenticação padão';
        }


        $ip = $request->serve->get('REMOTE_ADDR');
        $rota = $request->getRequestUri();
        logAcesso::create(['log' => "IP $ip acessou a rota $rota"]);
        
        return $next($request);
    
    }
}
