<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
 
class VerifyCsrfToken extends Middleware
{
    // Las rutas que se excluirían, si las necesitases (esto es opcional si se desactiva por completo)
    protected $except = [
        'register',
        'login',
        'blog/add',
        'blog/*',
    ];
 
    public function handle($request, Closure $next){
        error_log('Middleware CSRF deshabilitado');
        return $next($request);
    }
 
}