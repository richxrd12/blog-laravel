<?php
 
namespace App\Http;
 
use Illuminate\Foundation\Http\Kernel as HttpKernel;
 
class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'web' => [
            // Otros middlewares que uses...
            \App\Http\Middleware\VerifyCsrfToken::class,
        ],
    ];
 
    // Si es necesario, define también el grupo "api" u otros
}