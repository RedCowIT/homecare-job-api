<?php

namespace Modules\Plan\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Plan\Services\Interfaces\PlanPaymentPeriodService;

class PlanPaymentPeriodController extends EntityController
{
    public function __construct(PlanPaymentPeriodService $service)
    {
        parent::__construct($service);
    }
}
