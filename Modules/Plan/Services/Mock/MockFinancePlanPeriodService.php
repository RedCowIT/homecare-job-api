<?php

namespace Modules\Plan\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Plan\Entities\FinancePlanPeriod;
use Modules\Plan\Services\Interfaces\FinancePlanPeriodService;

class MockFinancePlanPeriodService extends MockEntityService implements FinancePlanPeriodService
{
    protected string $class = FinancePlanPeriod::class;

    protected array $data = [
        [
            'id' => 1,
            'months' => 6,
            'rate' => 15
        ]
    ];
}
