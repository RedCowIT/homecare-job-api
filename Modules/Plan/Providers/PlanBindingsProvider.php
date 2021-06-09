<?php

namespace Modules\Plan\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Plan\Services\Interfaces\PlanPaymentPeriodService;
use Modules\Plan\Services\Interfaces\PlanService;
use Modules\Plan\Services\Interfaces\PlanTypeService;
use Modules\Plan\Services\Mock\MockPlanPaymentPeriodService;
use Modules\Plan\Services\Mock\MockPlanService;
use Modules\Plan\Services\Mock\MockPlanTypeService;

class PlanBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            PlanPaymentPeriodService::class => [
                'mock' => MockPlanPaymentPeriodService::class,
                'web' => null
            ],
            PlanTypeService::class => [
                'mock' => MockPlanTypeService::class,
                'web' => null
            ],
            PlanService::class => [
                'mock' => MockPlanService::class,
                'web' => null
            ]
        ];
    }
}
