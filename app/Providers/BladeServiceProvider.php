<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Blade::directive('hello', function ($expression) {
        //     // return "&lt;?php echo 'Hello '. {$expression}; ?&gt;";
        //     return "Hello $expression";
        // });

        // Blade::directive('routeis', function ($expression) {
        //     return "&lt;?php if (fnmatch({$expression}, Route::currentRouteName())) : ?&gt;";
        // });

        // Blade::directive('endrouteis', function ($expression) {
        //     return '&lt;?php endif; ?&gt;';
        // });

        // Blade::if('role', function ($role) {
        //     // return app()->environment($environment);
        //     // return "if(auth()->check() && auth()->user()->hasRole({$role})) :"; //return this if statement inside php tag
        //     return auth()->check() &&  auth()->user()->hasRole($role) ? true:false;
        // });

        // Blade::directive('role', function ($role) {
        //     return "&lt;?php if(auth()->check() && auth()->user()->hasRole({$role})) :"; //return this if statement inside php tag
        // });

        // Blade::directive('endrole', function ($role) {
        //     return "endif; ?&gt;"; //return this endif statement inside php tag
        // });
    }
}
