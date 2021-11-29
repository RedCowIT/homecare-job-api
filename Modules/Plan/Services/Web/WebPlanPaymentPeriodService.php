<?php

namespace Modules\Plan\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Plan\Entities\PlanPaymentPeriod;
use Modules\Plan\Services\Interfaces\PlanPaymentPeriodService;

class WebPlanPaymentPeriodService extends WebEntityService implements PlanPaymentPeriodService
{
    protected string $class = PlanPaymentPeriod::class;
}
