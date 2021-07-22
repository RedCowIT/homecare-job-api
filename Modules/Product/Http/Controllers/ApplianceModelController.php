<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ApplianceModelService;

class ApplianceModelController extends EntityController
{
    public function __construct(ApplianceModelService $service)
    {
        parent::__construct($service);
    }
}
