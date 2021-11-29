<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\AppointmentType;
use Modules\Appointment\Services\Interfaces\AppointmentTypeService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentTypeService extends WebEntityService implements AppointmentTypeService
{
    protected string $class = AppointmentType::class;
}
