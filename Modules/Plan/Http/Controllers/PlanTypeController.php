<?php

namespace Modules\Plan\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Plan\Services\Interfaces\PlanTypeService;

class PlanTypeController extends EntityController
{
    public function __construct(PlanTypeService $service)
    {
        parent::__construct($service);
    }
}
