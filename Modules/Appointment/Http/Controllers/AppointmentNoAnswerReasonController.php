<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerReasonService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentNoAnswerReasonController extends EntityController
{
    public function __construct(AppointmentNoAnswerReasonService $service)
    {
        parent::__construct($service);
    }
}
