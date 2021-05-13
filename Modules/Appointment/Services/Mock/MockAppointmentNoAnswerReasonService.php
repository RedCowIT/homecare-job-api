<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\AppointmentNoAnswerReason;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerReasonService;
use Modules\Core\Services\MockEntityService;

class MockAppointmentNoAnswerReasonService extends MockEntityService implements AppointmentNoAnswerReasonService
{
    protected string $class = AppointmentNoAnswerReason::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => "No one home"
        ],
        [
            "id" => 2,
            "description" => "Not required"
        ]
    ];
}
