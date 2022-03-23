<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerAddress;
use Modules\Customer\Entities\CustomerAppliance;
use Modules\Customer\Entities\CustomerApplianceType;
use Modules\Customer\Entities\ResidentialStatus;
use Modules\Customer\Services\Interfaces\CustomerAddressService;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;
use Modules\Customer\Services\Interfaces\ResidentialStatusService;

class MockResidentialStatusService extends MockEntityService implements ResidentialStatusService
{
    protected string $class = ResidentialStatus::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'Owner'
        ]
    ];
}
