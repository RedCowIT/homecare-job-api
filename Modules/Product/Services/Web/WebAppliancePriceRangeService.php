<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\AppliancePriceRange;
use Modules\Product\Services\Interfaces\AppliancePriceRangeService;

class WebAppliancePriceRangeService extends WebEntityService implements AppliancePriceRangeService
{
    protected string $class = AppliancePriceRange::class;
}
