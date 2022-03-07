<?php

namespace Modules\Plan\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Plan\Entities\FinancePlanPeriod;
use Modules\Plan\Services\Interfaces\FinancePlanPeriodService;

class WebFinancePlanPeriodService extends WebEntityService implements FinancePlanPeriodService
{
    protected string $class = FinancePlanPeriod::class;
}
