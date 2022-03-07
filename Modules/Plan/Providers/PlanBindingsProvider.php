<?php

namespace Modules\Plan\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Plan\Services\Interfaces\AppliancePlanService;
use Modules\Plan\Services\Interfaces\FinancePlanPeriodService;
use Modules\Plan\Services\Interfaces\FinancePlanService;
use Modules\Plan\Services\Interfaces\PlanPaymentPeriodService;
use Modules\Plan\Services\Interfaces\PlanService;
use Modules\Plan\Services\Interfaces\PlanTypeService;
use Modules\Plan\Services\Mock\MockAppliancePlanService;
use Modules\Plan\Services\Mock\MockFinancePlanPeriodService;
use Modules\Plan\Services\Mock\MockFinancePlanService;
use Modules\Plan\Services\Mock\MockPlanPaymentPeriodService;
use Modules\Plan\Services\Mock\MockPlanService;
use Modules\Plan\Services\Mock\MockPlanTypeService;
use Modules\Plan\Services\Web\WebAppliancePlanService;
use Modules\Plan\Services\Web\WebFinancePlanPeriodService;
use Modules\Plan\Services\Web\WebFinancePlanService;
use Modules\Plan\Services\Web\WebPlanPaymentPeriodService;
use Modules\Plan\Services\Web\WebPlanService;
use Modules\Plan\Services\Web\WebPlanTypeService;

class PlanBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            FinancePlanPeriodService::class => [
                'mock' => MockFinancePlanPeriodService::class,
                'api' => WebFinancePlanPeriodService::class
            ],
            FinancePlanService::class => [
                'mock' => MockFinancePlanService::class,
                'api' => WebFinancePlanService::class
            ],
            PlanPaymentPeriodService::class => [
                'mock' => MockPlanPaymentPeriodService::class,
                'api' => WebPlanPaymentPeriodService::class
            ],
            PlanTypeService::class => [
                'mock' => MockPlanTypeService::class,
                'api' => WebPlanTypeService::class
            ],
            PlanService::class => [
                'mock' => MockPlanService::class,
                'api' => WebPlanService::class
            ],
            AppliancePlanService::class => [
                'mock' => MockAppliancePlanService::class,
                'api' => WebAppliancePlanService::class
            ]
        ];
    }
}
