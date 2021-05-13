<?php

namespace Modules\Core\Http\Controllers;

use Modules\Core\Services\Interfaces\AppDataIdService;

class AppDataIdController extends EntityController
{
    public function __construct(AppDataIdService $service)
    {
        parent::__construct($service);
    }
}
