<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentStatusService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentStatusController extends EntityController
{
    public function __construct(AppointmentStatusService $service)
    {
        parent::__construct($service);
    }
}
