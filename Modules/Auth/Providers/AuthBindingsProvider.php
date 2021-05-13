<?php

namespace Modules\Auth\Providers;

use Modules\Auth\Services\Interfaces\UserService;
use Modules\Auth\Services\Mock\MockUserService;
use Modules\Auth\Services\Web\WebUserService;
use Modules\Core\Providers\BindingsServiceProvider;

class AuthBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            UserService::class => [
                'mock' => MockUserService::class,
                'web' => WebUserService::class
            ]
        ];
    }
}
