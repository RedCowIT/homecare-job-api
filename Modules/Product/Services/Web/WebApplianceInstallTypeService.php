<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\ApplianceInstallType;
use Modules\Product\Services\Interfaces\ApplianceInstallTypeService;

class WebApplianceInstallTypeService extends WebEntityService implements ApplianceInstallTypeService
{
    protected string $class = ApplianceInstallType::class;
}
