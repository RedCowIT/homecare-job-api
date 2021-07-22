<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;

class CustomerApplianceController extends EntityController
{
    public function __construct(CustomerApplianceService $service)
    {
        parent::__construct($service);
    }
}
