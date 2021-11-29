<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerAppliance;
use Modules\Customer\Services\Interfaces\CustomerApplianceService;

class WebCustomerApplianceService extends WebEntityService implements CustomerApplianceService
{
    protected string $class = CustomerAppliance::class;
}
