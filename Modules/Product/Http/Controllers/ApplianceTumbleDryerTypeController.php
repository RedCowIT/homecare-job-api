<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ApplianceTumbleDryerTypeService;

class ApplianceTumbleDryerTypeController extends EntityController
{
    public function __construct(ApplianceTumbleDryerTypeService $service)
    {
        parent::__construct($service);
    }
}
