<?php

namespace Modules\Customer\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Customer\Services\Interfaces\CustomerAddressService;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;
use Modules\Customer\Services\Interfaces\CustomerPlanService;
use Modules\Customer\Services\Interfaces\CustomerService;
use Modules\Customer\Services\Mock\MockCustomerAddressService;
use Modules\Customer\Services\Mock\MockCustomerApplianceService;
use Modules\Customer\Services\Mock\MockCustomerPlanService;
use Modules\Customer\Services\Mock\MockCustomerService;
use Modules\Customer\Services\Web\WebCustomerAddressService;

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
                'api' => null
            ],
            CustomerService::class => [
                'mock' => MockCustomerService::class,
                'api' => null
            ],
            CustomerPlanService::class => [
                'mock' => MockCustomerPlanService::class,
                'api' => null
            ]
        ];
    }
}
