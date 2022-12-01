<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\ApplianceTumbleDryerType;
use Modules\Product\Services\Interfaces\ApplianceTumbleDryerTypeService;

class WebApplianceTumbleDryerTypeService extends WebEntityService implements ApplianceTumbleDryerTypeService
{
    protected string $class = ApplianceTumbleDryerType::class;
}
