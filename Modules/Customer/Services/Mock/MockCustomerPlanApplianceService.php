<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerPlanAppliance;
use Modules\Customer\Services\Interfaces\CustomerPlanApplianceService;

class MockCustomerPlanApplianceService extends MockEntityService implements CustomerPlanApplianceService
{
    protected string $class = CustomerPlanAppliance::class;

    protected array $data = [
    ];
}
