<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Modules\Auth\Services\AuthUserProvider;
use Modules\Auth\Services\Interfaces\UserService;
use Modules\Auth\Services\Mock\MockUserProvider;
use Modules\Auth\Services\Web\WebUserProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        if (env('MOCK_DATA', false)) {
            Auth::provider('authusers', function ($app, array $config) {
                return new MockUserProvider($this->app->make(UserService::class));
            });
        } else {
            Auth::provider('authusers', function ($app, array $config) {
                return new WebUserProvider($this->app->make(UserService::class));
            });
        }
    }
}
