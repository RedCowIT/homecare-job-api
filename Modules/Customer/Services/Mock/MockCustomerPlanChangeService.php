<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerPlanChange;
use Modules\Customer\Services\Interfaces\CustomerPlanChangeService;

class MockCustomerPlanChangeService extends MockEntityService implements CustomerPlanChangeService
{
    protected string $class = CustomerPlanChange::class;

    protected array $data = [

    ];
}
