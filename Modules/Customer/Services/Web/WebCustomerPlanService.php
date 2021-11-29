<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerPlan;
use Modules\Customer\Services\Interfaces\CustomerPlanService;

class WebCustomerPlanService extends WebEntityService implements CustomerPlanService
{
    protected string $class = CustomerPlan::class;
}
