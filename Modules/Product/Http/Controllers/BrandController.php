<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ApplianceTypeService;
use Modules\Product\Services\Interfaces\BrandService;

class BrandController extends EntityController
{
    public function __construct(BrandService $service)
    {
        parent::__construct($service);
    }
}
