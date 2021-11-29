<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\ApplianceType;
use Modules\Product\Services\Interfaces\ApplianceTypeService;

class WebApplianceTypeService extends WebEntityService implements ApplianceTypeService
{
    protected string $class = ApplianceType::class;
}
