<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\CallTypeService;
use Modules\Core\Http\Controllers\EntityController;

class CallTypeController extends EntityController
{
    public function __construct(CallTypeService $service)
    {
        parent::__construct($service);
    }
}
