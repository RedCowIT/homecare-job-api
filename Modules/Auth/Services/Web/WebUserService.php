<?php

namespace Modules\Auth\Services\Web;

use Modules\Auth\Models\User;
use Modules\Auth\Services\Auth0\Auth0Service;
use Modules\Auth\Services\Interfaces\UserService;
use Modules\Core\Services\WebEntityService;

class WebUserService extends WebEntityService implements UserService
{
    function find($id): array
    {
        // Convert Auth0 to user id
        $user = $this->auth0Service()->getUserByAuth0Id($id);

        return [
            'id' => 4,
            'email' => '',
            'username' => ''
        ];
    }

    protected function getClass(): string
    {
        return User::class;
    }

    protected function auth0Service(): Auth0Service
    {
        return app(Auth0Service::class);
    }
}
