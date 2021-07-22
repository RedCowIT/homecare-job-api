<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerService;
use Modules\Appointment\Services\Interfaces\AppointmentVisitService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentVisitController extends EntityController
{
    public function __construct(AppointmentVisitService $service)
    {
        parent::__construct($service);
    }
}
