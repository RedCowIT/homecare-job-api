<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ApplianceInstallTypeService;

class ApplianceInstallTypeController extends EntityController
{
    public function __construct(ApplianceInstallTypeService $service)
    {
        parent::__construct($service);
    }
}
