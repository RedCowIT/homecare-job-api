<?php

namespace Modules\Auth\Services\Web;

use Modules\Auth\Services\Interfaces\UserService;

class WebUserService implements UserService
{
    function find($id)
    {
        return [
            'id' => 90,
            'email' => 'dom@digidom.co.uk',
            'username' => 'dom'
        ];
    }

    function query(array $params)
    {
        // TODO: Implement query() method.
    }

}
