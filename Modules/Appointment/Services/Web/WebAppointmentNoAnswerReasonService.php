<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\AppointmentNoAnswerReason;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerReasonService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentNoAnswerReasonService extends WebEntityService implements AppointmentNoAnswerReasonService
{
    protected string $class = AppointmentNoAnswerReason::class;
}
