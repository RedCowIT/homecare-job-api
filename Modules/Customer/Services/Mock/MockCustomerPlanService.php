<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerPlan;
use Modules\Customer\Services\Interfaces\CustomerPlanService;

class MockCustomerPlanService extends MockEntityService implements CustomerPlanService
{
    protected string $class = CustomerPlan::class;

    protected array $data = [
        [
            "id" => 1,
            "customerId" => 1,
            "planId" => 1,
            "invoiceId" => 1,
            "appointmentId" => null,
            "startDate" => "",
            "expiryDate" => "",
            "periodPrice" => 12.50,
            "planPaymentPeriodId" => 1
        ],
        [
            "id" => 2,
            "customerId" => 1,
            "planId" => 2,
            "invoiceId" => 1,
            "appointmentId" => null,
            "startDate" => "",
            "expiryDate" => "",
            "periodPrice" => 7.50,
            "planPaymentPeriodId" => 1
        ],
        [
            "id" => 3,
            "customerId" => 2,
            "planId" => 1,
            "invoiceId" => 2,
            "appointmentId" => null,
            "startDate" => "",
            "expiryDate" => "",
            "periodPrice" => 12.50,
            "planPaymentPeriodId" => 1
        ],
    ];
}
