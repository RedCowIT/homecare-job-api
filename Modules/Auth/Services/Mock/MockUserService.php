<?php

namespace Modules\Auth\Services\Mock;

use Modules\Auth\Models\User;
use Modules\Auth\Services\Interfaces\UserService;
use Modules\Core\Services\MockEntityService;

class MockUserService extends MockEntityService implements UserService
{
    protected string $class = User::class;
    protected bool $returnFirst = true;
    protected array $data = [
        [
            'id' => 90,
            'email' => 'dom@digidom.co.uk',
            'username' => 'dom'
        ]
    ];
}
