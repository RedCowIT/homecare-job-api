<?php

namespace Modules\Plan\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Plan\Entities\PlanType;
use Modules\Plan\Services\Interfaces\PlanTypeService;

class WebPlanTypeService extends WebEntityService implements PlanTypeService
{
    protected string $class = PlanType::class;
}
