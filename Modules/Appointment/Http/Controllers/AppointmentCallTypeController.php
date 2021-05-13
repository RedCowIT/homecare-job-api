<?php

namespace Modules\Appointment\Http\Controllers;

use Modules\Appointment\Services\Interfaces\AppointmentCallTypeService;
use Modules\Core\Http\Controllers\EntityController;

class AppointmentCallTypeController extends EntityController
{
    public function __construct(AppointmentCallTypeService $service)
    {
        parent::__construct($service);
    }
}
