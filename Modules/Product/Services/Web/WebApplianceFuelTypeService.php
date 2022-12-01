<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\ApplianceFuelType;
use Modules\Product\Services\Interfaces\ApplianceFuelTypeService;

class WebApplianceFuelTypeService extends WebEntityService implements ApplianceFuelTypeService
{
    protected string $class = ApplianceFuelType::class;
}
