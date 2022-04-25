<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\ProductStock;
use Modules\Product\Services\Interfaces\ProductService;
use Modules\Product\Services\Interfaces\ProductStockService;

class MockProductStockService extends MockEntityService implements ProductStockService
{
    protected string $class = ProductStock::class;

    protected array $data = [
    ];
}
