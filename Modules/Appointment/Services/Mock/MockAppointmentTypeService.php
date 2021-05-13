<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\AppointmentType;
use Modules\Appointment\Entities\CallType;
use Modules\Appointment\Services\Interfaces\AppointmentTypeService;
use Modules\Appointment\Services\Interfaces\CallTypeService;
use Modules\Core\Services\MockEntityService;

class MockAppointmentTypeService extends MockEntityService implements AppointmentTypeService
{
    protected string $class = AppointmentType::class;

    protected array $data = [
        [
            "id" => 1,
            "active" => true,
            "description" => "Free",
        ],
        [
            "id" => 2,
            "active" => true,
            "description" => "Fresh"
        ],
        [
            "id" => 3,
            "active" => true,
            "description" => "NCO",
        ]
    ];
}
