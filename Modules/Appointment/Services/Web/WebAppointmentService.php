<?php

namespace Modules\Appointment\Services\Web;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Modules\Appointment\Entities\Appointment;
use Modules\Appointment\Services\Interfaces\AppointmentService;
use Modules\Core\Services\WebEntityService;

class WebAppointmentService extends WebEntityService implements AppointmentService
{
    protected string $class = Appointment::class;

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
            'fromDate' => Arr::get($params, 'fromDate', $today),
            'toDate' => Arr::get($params, 'toDate', $today)
        ];

        return parent::query($queryParams);
    }
}
