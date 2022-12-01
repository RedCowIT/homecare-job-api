<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\AppointmentSummary;
use Modules\Appointment\Services\Interfaces\AppointmentSummaryService;
use Modules\Core\Services\MockEntityService;

class MockAppointmentSummaryService extends MockEntityService implements AppointmentSummaryService
{
    protected string $class = AppointmentSummary::class;

    protected array $data = [
        [

        ]
    ];
}
