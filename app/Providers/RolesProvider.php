<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;

class RolesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        Gate::define('admin', function (User $user):bool{
            return $user->role === 'admin';
        });

        Gate::define('client', function (User $user):bool {
            return $user->role === 'client';
        });

        Gate::define('premium_client', function (User $user):bool {
            return $user->role === 'premium_client';
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
