<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentNoAnswerController extends EntityController
{
    public function __construct(AppointmentNoAnswerService $service)
    {
        parent::__construct($service);
    }
}
