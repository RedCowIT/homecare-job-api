<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerPlanService;

class CustomerPlanController extends EntityController
{
    public function __construct(CustomerPlanService $service)
    {
        parent::__construct($service);
    }
}
