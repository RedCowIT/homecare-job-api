<?php

namespace Modules\Billing\Providers;

use Modules\Appointment\Services\Interfaces\AppointmentCallTypeService;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerReasonService;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerService;
use Modules\Appointment\Services\Interfaces\AppointmentService;
use Modules\Appointment\Services\Interfaces\AppointmentStatusService;
use Modules\Appointment\Services\Interfaces\AppointmentTypeService;
use Modules\Appointment\Services\Interfaces\CallTypeClassService;
use Modules\Appointment\Services\Interfaces\CallTypeService;
use Modules\Appointment\Services\Mock\MockAppointmentCallTypeService;
use Modules\Appointment\Services\Mock\MockAppointmentNoAnswerReasonService;
use Modules\Appointment\Services\Mock\MockAppointmentNoAnswerService;
use Modules\Appointment\Services\Mock\MockAppointmentService;
use Modules\Appointment\Services\Mock\MockAppointmentStatusService;
use Modules\Appointment\Services\Mock\MockAppointmentTypeService;
use Modules\Appointment\Services\Mock\MockCallTypeClassService;
use Modules\Appointment\Services\Mock\MockCallTypeService;
use Modules\Core\Providers\BindingsServiceProvider;

class BillingBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [

        ];
    }
}
