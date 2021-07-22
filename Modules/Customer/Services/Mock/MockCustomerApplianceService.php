<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerAddress;
use Modules\Customer\Entities\CustomerAppliance;
use Modules\Customer\Services\Interfaces\CustomerAddressService;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;

class MockCustomerApplianceService extends MockEntityService implements CustomerApplianceService
{
    protected string $class = CustomerAppliance::class;

    protected array $data = [
        [
            "id" => 1,
            "customerId" => 1,
            "applianceTypeId" => 1,
            "manufacturerId" => 1,
            "modelId" => 1,
            "manufacturerText" => null,
            "modelText" => null,
            "serialNo" => null,
            "active" => 1
        ],
        [
            "id" => 2,
            "customerId" => 1,
            "applianceTypeId" => 2,
            "manufacturerId" => null,
            "modelId" => null,
            "manufacturerText" => "Boss Ovens",
            "modelText" => "Boss How 1000",
            "serialNo" => "boss1",
            "active" => 1
        ]
    ];
}
