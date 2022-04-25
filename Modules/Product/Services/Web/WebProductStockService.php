<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\ProductStock;
use Modules\Product\Services\Interfaces\ProductStockService;

class WebProductStockService extends WebEntityService implements ProductStockService
{
    protected string $class = ProductStock::class;
}
