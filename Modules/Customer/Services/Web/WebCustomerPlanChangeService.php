<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerPlanChange;
use Modules\Customer\Services\Interfaces\CustomerPlanChangeService;

class WebCustomerPlanChangeService extends WebEntityService implements CustomerPlanChangeService
{
    protected string $class = CustomerPlanChange::class;
}
