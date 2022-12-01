<?php

namespace Modules\Appointment\Providers;

use Modules\Appointment\Services\Interfaces\AppointmentCallTypeService;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerReasonService;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerService;
use Modules\Appointment\Services\Interfaces\AppointmentService;
use Modules\Appointment\Services\Interfaces\AppointmentStatusService;
use Modules\Appointment\Services\Interfaces\AppointmentSummaryService;
use Modules\Appointment\Services\Interfaces\AppointmentTypeService;
use Modules\Appointment\Services\Interfaces\AppointmentVisitService;
use Modules\Appointment\Services\Interfaces\CallTypeClassService;
use Modules\Appointment\Services\Interfaces\CallTypeService;
use Modules\Appointment\Services\Mock\MockAppointmentCallTypeService;
use Modules\Appointment\Services\Mock\MockAppointmentNoAnswerReasonService;
use Modules\Appointment\Services\Mock\MockAppointmentNoAnswerService;
use Modules\Appointment\Services\Mock\MockAppointmentService;
use Modules\Appointment\Services\Mock\MockAppointmentStatusService;
use Modules\Appointment\Services\Mock\MockAppointmentSummaryService;
use Modules\Appointment\Services\Mock\MockAppointmentTypeService;
use Modules\Appointment\Services\Mock\MockAppointmentVisitService;
use Modules\Appointment\Services\Mock\MockCallTypeClassService;
use Modules\Appointment\Services\Mock\MockCallTypeService;
use Modules\Appointment\Services\Web\WebAppointmentCallTypeService;
use Modules\Appointment\Services\Web\WebAppointmentNoAnswerReasonService;
use Modules\Appointment\Services\Web\WebAppointmentNoAnswerService;
use Modules\Appointment\Services\Web\WebAppointmentService;
use Modules\Appointment\Services\Web\WebAppointmentStatusService;
use Modules\Appointment\Services\Web\WebAppointmentSummaryService;
use Modules\Appointment\Services\Web\WebAppointmentTypeService;
use Modules\Appointment\Services\Web\WebAppointmentVisitService;
use Modules\Appointment\Services\Web\WebCallTypeClassService;
use Modules\Appointment\Services\Web\WebCallTypeService;
use Modules\Core\Providers\BindingsServiceProvider;

class AppointmentBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            AppointmentService::class => [
                'mock' => MockAppointmentService::class,
                'api' => WebAppointmentService::class
            ],
            AppointmentCallTypeService::class => [
                'mock' => MockAppointmentCallTypeService::class,
                'api' => WebAppointmentCallTypeService::class
            ],
            AppointmentNoAnswerReasonService::class => [
                'mock' => MockAppointmentNoAnswerReasonService::class,
                'api' => WebAppointmentNoAnswerReasonService::class
            ],
            AppointmentNoAnswerService::class => [
                'mock' => MockAppointmentNoAnswerService::class,
                'api' => WebAppointmentNoAnswerService::class
            ],
            AppointmentStatusService::class => [
                'mock' => MockAppointmentStatusService::class,
                'api' => WebAppointmentStatusService::class
            ],
            AppointmentTypeService::class => [
                'mock' => MockAppointmentTypeService::class,
                'api' => WebAppointmentTypeService::class
            ],
            AppointmentSummaryService::class => [
              'mock' => MockAppointmentSummaryService::class,
              'api' => WebAppointmentSummaryService::class
            ],
            AppointmentVisitService::class => [
                'mock' => MockAppointmentVisitService::class,
                'api' => WebAppointmentVisitService::class
            ],
            CallTypeService::class => [
                'mock' => MockCallTypeService::class,
                'api' => WebCallTypeService::class
            ],
            CallTypeClassService::class => [
                'mock' => MockCallTypeClassService::class,
                'api' => WebCallTypeClassService::class
            ]
        ];
    }
}
