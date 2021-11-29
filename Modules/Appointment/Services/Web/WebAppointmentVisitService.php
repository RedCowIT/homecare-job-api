<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\AppointmentVisit;
use Modules\Appointment\Services\Interfaces\AppointmentVisitService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentVisitService extends WebEntityService implements AppointmentVisitService
{
    protected string $class = AppointmentVisit::class;
}
