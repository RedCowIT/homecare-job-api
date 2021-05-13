<?php

namespace Modules\Customer\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Customer\Services\Interfaces\CustomerAddressService;
use Modules\Customer\Services\Interfaces\CustomerService;
use Modules\Customer\Services\Mock\MockCustomerAddressService;
use Modules\Customer\Services\Mock\MockCustomerService;

class CustomerBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            CustomerAddressService::class => [
                'mock' => MockCustomerAddressService::class,
                'api' => null
            ],
            CustomerService::class => [
                'mock' => MockCustomerService::class,
                'api' => null
            ]
        ];
    }
}
