<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\Appointment;
use Modules\Appointment\Services\Interfaces\AppointmentService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentService extends WebEntityService implements AppointmentService
{
    protected string $class = Appointment::class;
}
