<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerAddress;
use Modules\Customer\Services\Interfaces\CustomerAddressService;

class MockCustomerAddressService extends MockEntityService implements CustomerAddressService
{
    protected string $class = CustomerAddress::class;

    protected array $data = [
        [
            "id" => 1,
            "customerId" => 1,
            "isDefault" => true,
            "address1" => "22D Jordan St",
            "address2" => "Liverpool",
            "address3" => "",
            "address4" => "",
            "country" => "England",
            "postcode" => "L1 0BP"
        ],
        [
            "id" => 2,
            "customerId" => 2,
            "isDefault" => true,
            "address1" => "10 Jamaica St",
            "address2" => "Liverpool",
            "address3" => "",
            "address4" => "",
            "country" => "England",
            "postcode" => "L1 0BP"
        ]
    ];
}
