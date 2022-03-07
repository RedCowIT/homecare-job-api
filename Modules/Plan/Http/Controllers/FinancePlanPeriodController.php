<?php

namespace Modules\Plan\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Plan\Services\Interfaces\FinancePlanPeriodService;

class FinancePlanPeriodController extends EntityController
{
    public function __construct(FinancePlanPeriodService $service)
    {
        parent::__construct($service);
    }
}
