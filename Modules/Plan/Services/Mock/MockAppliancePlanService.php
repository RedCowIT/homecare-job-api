<?php

namespace Modules\Plan\Services\Mock;

use Modules\Plan\Services\Interfaces\AppliancePlanService;

class MockAppliancePlanService implements AppliancePlanService
{
    function calculate($model)
    {
        return [
            'periodPrice' => 5.99
        ];
    }
}
