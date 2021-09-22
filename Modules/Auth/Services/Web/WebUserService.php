<?php

namespace Modules\Auth\Services\Web;

use Modules\Auth\Models\User;
use Modules\Auth\Services\Interfaces\UserService;
use Modules\Core\Services\WebEntityService;

class WebUserService extends WebEntityService implements UserService
{
    function find($id): array
    {
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
}
