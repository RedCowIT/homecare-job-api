<?php

namespace Modules\Plan\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Plan\Entities\Plan;
use Modules\Plan\Services\Interfaces\PlanService;

class WebPlanService extends WebEntityService implements PlanService
{
    protected string $class = Plan::class;
}
