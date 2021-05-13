<?php

namespace Modules\Plan\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Plan\Services\Interfaces\PlanPaymentPeriodService;
use Modules\Plan\Services\Mock\MockPlanPaymentPeriodService;

class PlanBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            PlanPaymentPeriodService::class => [
                'mock' => MockPlanPaymentPeriodService::class,
                'web' => null
            ]
        ];
    }
}
