<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\AppointmentStatus;
use Modules\Appointment\Services\Interfaces\AppointmentStatusService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentStatusService extends WebEntityService implements AppointmentStatusService
{
    protected string $class = AppointmentStatus::class;
}
