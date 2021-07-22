<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\AppliancePriceRangeService;

class AppliancePriceRangeController extends EntityController
{
    public function __construct(AppliancePriceRangeService $service)
    {
        parent::__construct($service);
    }
}
