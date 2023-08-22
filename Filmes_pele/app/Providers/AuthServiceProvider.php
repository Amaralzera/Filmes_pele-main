<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
        protected $policies = [
            User::class => UserPolicy::class,
        ];

        public function boot()
        {
            $this->registerPolicies();

            Gate::define('admin', [UserPolicy::class, 'isAdmin']);
        }


    /**
     * Register any authentication / authorization services.
     */
}
