<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\Services\Interfaces\PolicyService;

class PolicyController extends EntityController
{
    public function __construct(PolicyService $service)
    {
        parent::__construct($service);
    }
}
