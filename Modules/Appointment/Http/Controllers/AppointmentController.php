<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentController extends EntityController
{
    public function __construct(AppointmentService $service)
    {
        parent::__construct($service);
    }
}
