<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ApplianceTypeService;

class ApplianceTypeController extends EntityController
{
    public function __construct(ApplianceTypeService $service)
    {
        parent::__construct($service);
    }
}
