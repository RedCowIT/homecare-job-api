<?php

namespace Modules\Appointment\Services\Web;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Modules\Appointment\Entities\Appointment;
use Modules\Appointment\Entities\AppointmentSummary;
use Modules\Appointment\Services\Interfaces\AppointmentService;
use Modules\Appointment\Services\Interfaces\AppointmentSummaryService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentSummaryService extends WebEntityService implements AppointmentSummaryService
{
    protected string $class = AppointmentSummary::class;

    /**
     * Default date query to today
     *
     * @param array $params
     * @return array|mixed|null
     */
    function query(array $params = [])
    {
        $today = Carbon::now()->toDateString();

        $queryParams = [
            'startDate' => Arr::get($params, 'startDate', $today),
            'endDate' => Arr::get($params, 'endDate', $today)
        ];

        return parent::query($queryParams);
    }

    protected function getUri(): string {
        return 'appointmentSummary';
    }
}
