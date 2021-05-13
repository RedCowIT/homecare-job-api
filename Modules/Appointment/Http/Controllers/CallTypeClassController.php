<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\CallTypeClassService;
use Modules\Core\Http\Controllers\EntityController;

class CallTypeClassController extends EntityController
{
    public function __construct(CallTypeClassService $service)
    {
        parent::__construct($service);
    }
}
