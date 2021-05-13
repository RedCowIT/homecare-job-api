<?php

namespace Modules\Appointment\Providers;

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

class AppointmentBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            AppointmentService::class => [
                'mock' => MockAppointmentService::class,
                'api' => null
            ],
            AppointmentCallTypeService::class => [
                'mock' => MockAppointmentCallTypeService::class,
                'api' => null
            ],
            AppointmentNoAnswerReasonService::class => [
                'mock' => MockAppointmentNoAnswerReasonService::class,
                'api' => null
            ],
            AppointmentNoAnswerService::class => [
                'mock' => MockAppointmentNoAnswerService::class,
                'api' => null
            ],
            AppointmentStatusService::class => [
                'mock' => MockAppointmentStatusService::class,
                'api' => null
            ],
            AppointmentTypeService::class => [
                'mock' => MockAppointmentTypeService::class,
                'api' => null
            ],
            CallTypeService::class => [
                'mock' => MockCallTypeService::class,
                'api' => null
            ],
            CallTypeClassService::class => [
                'mock' => MockCallTypeClassService::class,
                'api' => null
            ]
        ];
    }
}
