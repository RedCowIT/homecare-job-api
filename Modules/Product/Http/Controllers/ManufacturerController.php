<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ManufacturerService;

class ManufacturerController extends EntityController
{
    public function __construct(ManufacturerService $service)
    {
        parent::__construct($service);
    }
}
