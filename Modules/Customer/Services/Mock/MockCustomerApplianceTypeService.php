<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerAddress;
use Modules\Customer\Entities\CustomerAppliance;
use Modules\Customer\Entities\CustomerApplianceType;
use Modules\Customer\Services\Interfaces\CustomerAddressService;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;

class MockCustomerApplianceTypeService extends MockEntityService implements CustomerApplianceTypeService
{
    protected string $class = CustomerApplianceType::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'Vacuum',
            "icon" => 'vacuum'
        ],
        [
            "id" => 2,
            "description" => 'Oven',
            "icon" => 'oven'
        ]
    ];
}
