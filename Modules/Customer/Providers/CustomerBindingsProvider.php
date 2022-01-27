<?php

namespace Modules\Customer\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Customer\Services\Interfaces\CustomerAddressService;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;
use Modules\Customer\Services\Interfaces\CustomerApplianceTypeService;
use Modules\Customer\Services\Interfaces\CustomerPlanApplianceService;
use Modules\Customer\Services\Interfaces\CustomerPlanService;
use Modules\Customer\Services\Interfaces\CustomerService;
use Modules\Customer\Services\Mock\MockCustomerAddressService;
use Modules\Customer\Services\Mock\MockCustomerApplianceService;
use Modules\Customer\Services\Mock\MockCustomerApplianceTypeService;
use Modules\Customer\Services\Mock\MockCustomerPlanApplianceService;
use Modules\Customer\Services\Mock\MockCustomerPlanService;
use Modules\Customer\Services\Mock\MockCustomerService;
use Modules\Customer\Services\Web\WebCustomerAddressService;
use Modules\Customer\Services\Web\WebCustomerApplianceService;
use Modules\Customer\Services\Web\WebCustomerApplianceTypeService;
use Modules\Customer\Services\Web\WebCustomerPlanApplianceService;
use Modules\Customer\Services\Web\WebCustomerPlanService;
use Modules\Customer\Services\Web\WebCustomerService;

class CustomerBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            CustomerAddressService::class => [
                'mock' => MockCustomerAddressService::class,
                'api' => WebCustomerAddressService::class
            ],
            CustomerApplianceService::class => [
                'mock' => MockCustomerApplianceService::class,
                'api' => WebCustomerApplianceService::class
            ],
            CustomerApplianceTypeService::class => [
                'mock' => MockCustomerApplianceTypeService::class,
                'api' => WebCustomerApplianceTypeService::class
            ],
            CustomerService::class => [
                'mock' => MockCustomerService::class,
                'api' => WebCustomerService::class
            ],
            CustomerPlanService::class => [
                'mock' => MockCustomerPlanService::class,
                'api' => WebCustomerPlanService::class
            ],
            CustomerPlanApplianceService::class => [
                'mock' => MockCustomerPlanApplianceService::class,
                'api' => WebCustomerPlanApplianceService::class
            ]
        ];
    }
}
