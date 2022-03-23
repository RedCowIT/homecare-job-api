<?php

namespace Modules\Plan\Services\Mock;

use Modules\Plan\Services\Interfaces\AppliancePlanService;

class MockFinancePlanService implements AppliancePlanService
{
    function calculate($model)
    {
        return [
            'loan' => 8,
            'interest' => 2,
            'totalPayable' => 10
        ];
    }
}
