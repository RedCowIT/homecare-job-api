<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerApplianceType;
use Modules\Customer\Services\Interfaces\CustomerApplianceTypeService;

class WebCustomerApplianceTypeService extends WebEntityService implements CustomerApplianceTypeService
{
    protected string $class = CustomerApplianceType::class;
}
