<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ProductStockService;

class ProductStockController extends EntityController
{
    public function __construct(ProductStockService $service)
    {
        parent::__construct($service);
    }
}
