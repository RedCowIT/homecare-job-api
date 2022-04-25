<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerPlanChangeService;

class CustomerPlanChangeController extends EntityController
{
    public function __construct(CustomerPlanChangeService $service)
    {
        parent::__construct($service);
    }
}
