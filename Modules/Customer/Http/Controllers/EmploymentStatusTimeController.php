<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\EmploymentStatusTimeService;

class EmploymentStatusTimeController extends EntityController
{
    public function __construct(EmploymentStatusTimeService $service)
    {
        parent::__construct($service);
    }
}
