<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceService;

class CustomerPlanFinanceController extends EntityController
{
    public function __construct(CustomerPlanFinanceService $service)
    {
        parent::__construct($service);
    }
}
