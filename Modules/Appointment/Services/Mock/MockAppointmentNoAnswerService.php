<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\AppointmentNoAnswer;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerService;
use Modules\Core\Services\MockEntityService;

class MockAppointmentNoAnswerService extends MockEntityService implements AppointmentNoAnswerService
{
    protected string $class = AppointmentNoAnswer::class;

    protected array $data = [
        [
            "id" => 1,
            "appointmentId" => 1,
            "noAnswerReasonId" => 1,
            "notes" => ""
        ]
    ];
}
