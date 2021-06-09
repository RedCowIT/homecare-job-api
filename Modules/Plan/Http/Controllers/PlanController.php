<?php

namespace Modules\Plan\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Plan\Services\Interfaces\PlanService;

class PlanController extends EntityController
{
    public function __construct(PlanService $service)
    {
        parent::__construct($service);
    }
}
