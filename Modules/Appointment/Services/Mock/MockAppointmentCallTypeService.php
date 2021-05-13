<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\AppointmentCallType;
use Modules\Appointment\Services\Interfaces\AppointmentCallTypeService;
use Modules\Core\Services\MockEntityService;

class MockAppointmentCallTypeService extends MockEntityService implements AppointmentCallTypeService
{
    protected string $class = AppointmentCallType::class;

    protected array $data = [
        [
            "id" => 1,
            "appointmentId" => 1,
            "callTypeId" => 1,
            "quotedPrice" => 10
        ],
        [
            "id" => 2,
            "appointmentId" => 1,
            "callTypeId" => 2,
            "quotedPrice" => 5
        ]
    ];
}
