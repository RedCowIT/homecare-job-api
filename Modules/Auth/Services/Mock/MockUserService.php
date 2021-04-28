<?php

namespace Modules\Auth\Services\Mock;

use Modules\Auth\Models\User;
use Modules\Auth\Services\Interfaces\UserService;

class MockUserService implements UserService
{
    function find($id)
    {
        return new User([
            'id' => 90,
            'email' => 'dom@digidom.co.uk',
            'username' => 'dom'
        ]);
    }

    function query(array $params)
    {
        // TODO: Implement query() method.
    }

}
