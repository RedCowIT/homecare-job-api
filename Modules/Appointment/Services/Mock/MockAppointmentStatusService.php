<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\AppointmentStatus;
use Modules\Appointment\Services\Interfaces\AppointmentStatusService;
use Modules\Core\Services\MockEntityService;

class MockAppointmentStatusService extends MockEntityService implements AppointmentStatusService
{
    protected string $class = AppointmentStatus::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => "Pending"
        ],
        [
            "id" => 2,
            "description" => "Complete"
        ],
        [
            "id" => 3,
            "description" => "Cancelled"
        ]
    ];
}
