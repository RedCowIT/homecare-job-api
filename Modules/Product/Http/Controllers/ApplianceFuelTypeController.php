<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ApplianceFuelTypeService;

class ApplianceFuelTypeController extends EntityController
{
    public function __construct(ApplianceFuelTypeService $service)
    {
        parent::__construct($service);
    }
}
