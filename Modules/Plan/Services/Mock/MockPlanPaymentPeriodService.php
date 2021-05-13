<?php

namespace Modules\Plan\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Plan\Entities\PlanPaymentPeriod;
use Modules\Plan\Services\Interfaces\PlanPaymentPeriodService;

class MockPlanPaymentPeriodService extends MockEntityService implements PlanPaymentPeriodService
{
    protected string $class = PlanPaymentPeriod::class;

    protected array $data = [
        [
            'id' => 1,
            'description' => 'Monthly',
            'multiplier' => 12
        ],
        [
            'id' => 2,
            'description' => 'Annually',
            'multiplier' => 1
        ]
    ];
}
