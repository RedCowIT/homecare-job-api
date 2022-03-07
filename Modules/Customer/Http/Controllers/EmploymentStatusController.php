<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\EmploymentStatusService;

class EmploymentStatusController extends EntityController
{
    public function __construct(EmploymentStatusService $service)
    {
        parent::__construct($service);
    }
}
