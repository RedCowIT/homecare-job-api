<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerApplianceTypeService;

class CustomerApplianceTypeController extends EntityController
{
    public function __construct(CustomerApplianceTypeService $service)
    {
        parent::__construct($service);
    }
}
