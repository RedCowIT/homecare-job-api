<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Services\Interfaces\AppointmentCallTypeService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentCallTypeService extends WebEntityService implements AppointmentCallTypeService
{
    protected string $class = AppointmentCallTypeService::class;
}
