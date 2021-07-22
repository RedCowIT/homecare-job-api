<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\CommercialProductService;

class CommercialProductController extends EntityController
{
    public function __construct(CommercialProductService $service)
    {
        parent::__construct($service);
    }
}
