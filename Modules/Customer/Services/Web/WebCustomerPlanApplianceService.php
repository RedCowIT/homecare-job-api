<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerPlanAppliance;
use Modules\Customer\Services\Interfaces\CustomerPlanApplianceService;

class WebCustomerPlanApplianceService extends WebEntityService implements CustomerPlanApplianceService
{
    protected string $class = CustomerPlanAppliance::class;
}
