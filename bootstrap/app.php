<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(prepend: [
           \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class//  Sanctum middleware
        ]);
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMIddleware::class,
            'client' => \App\Http\Middleware\ClientMiddleware::class,
            'premium_client' => \App\Http\Middleware\ClientPremiumMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
