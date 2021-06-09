<?php

namespace Modules\Appointment\Services\Mock;

use Carbon\Carbon;
use Modules\Appointment\Entities\AppointmentCallType;
use Modules\Appointment\Services\Interfaces\AppointmentService;
use Modules\Core\Services\MockEntityService;

/**
 * Second appointment is of type NCO
 *
 * @package Modules\Appointment\Services\Mock
 */
class MockAppointmentService extends MockEntityService implements AppointmentService
{
    protected string $class = AppointmentCallType::class;

    protected array $data = [

    ];


    public function __construct()
    {
        $this->data = [
            [
                "id" => 1,
                "customerId" => 1,
                "addressId" => 1,
                "appointmentTypeId" => 1,
                "appointmentStatusId" => 1,
                "engineerId" => 1,
                "bookingDateTime" => Carbon::now()->toISOString(),
                "priceAgreed" => 3
            ],
            [
                "id" => 2,
                "customerId" => 2,
                "addressId" => 2,
                "appointmentTypeId" => 3,   //NCO
                "appointmentStatusId" => 1,
                "engineerId" => 1,
                "bookingDateTime" => Carbon::now()->addHour()->toISOString(),
                "priceAgreed" => 3
            ]
        ];
    }

}
