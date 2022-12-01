<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentSummaryService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentSummaryController extends EntityController
{
    public function __construct(AppointmentSummaryService $service)
    {
        parent::__construct($service);
    }
}
