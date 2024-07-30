<?php

use App\Http\Middleware\IsBlockedSeller;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        // then:function(){
        //     Route::prefix('/admin')->group(base_path('routes/admin.php'));
        // },
        // then: __DIR__.'/../routes/admin.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
                  /**** OTHER MIDDLEWARE ****/
        'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
        'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
        'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
        'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
        'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class
        ,'IsBlockedSeller'          => IsBlockedSeller::class

        ]);
        // $middleware->append(IsBlockedSeller::class);
        // $middleware->web([IsBlockedSeller::class]);

    //     $commands = [
    //        \App\Console\Commands\MakeRepository::class,
    //    ];
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
