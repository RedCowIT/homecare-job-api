<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentTypeService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentTypeController extends EntityController
{
    public function __construct(AppointmentTypeService $service)
    {
        parent::__construct($service);
    }
}
