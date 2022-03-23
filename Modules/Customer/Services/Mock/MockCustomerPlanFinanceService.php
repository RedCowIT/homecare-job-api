<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerPlanFinance;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceService;

class MockCustomerPlanFinanceService extends MockEntityService implements CustomerPlanFinanceService
{
    protected string $class = CustomerPlanFinance::class;

    protected array $data = [
    ];
}
