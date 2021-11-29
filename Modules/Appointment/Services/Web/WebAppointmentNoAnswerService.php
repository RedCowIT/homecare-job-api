<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\AppointmentNoAnswer;
use Modules\Appointment\Services\Interfaces\AppointmentNoAnswerService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentNoAnswerService extends WebEntityService implements AppointmentNoAnswerService
{
    protected string $class = AppointmentNoAnswer::class;
}
