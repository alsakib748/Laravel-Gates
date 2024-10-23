<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Gate::define('isAdmin',function(User $user){

            return $user->role === 'admin';

        });

        Gate::define('view-profile',function(User $user, $profileUser){

            return $user->id == $profileUser;

        });

        Gate::define('post-update', function(User $user, $targetUser){
            return $user->id == $targetUser;
        });

        Gate::define('post-delete',function(User $user, $targetId){
            return $user->id == $targetId;
        });

        // todo: first work to other gate
        Gate::before(function(User $user){
            echo "Before Gate";
        });

        // todo: Last work to other gate
        Gate::after(function(User $user){
            echo "After Gate";
        });

    }
}
