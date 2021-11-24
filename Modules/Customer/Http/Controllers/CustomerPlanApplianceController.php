<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerPlanApplianceService;

class CustomerPlanApplianceController extends EntityController
{
    public function __construct(CustomerPlanApplianceService $service)
    {
        parent::__construct($service);
    }
}
