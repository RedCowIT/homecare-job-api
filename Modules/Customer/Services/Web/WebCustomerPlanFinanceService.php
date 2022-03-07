<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerPlanFinance;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceService;

class WebCustomerPlanFinanceService extends WebEntityService implements CustomerPlanFinanceService
{
    protected string $class = CustomerPlanFinance::class;
}
