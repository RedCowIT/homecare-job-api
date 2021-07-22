<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\Product;
use Modules\Product\Services\Interfaces\ProductService;

class MockProductService extends MockEntityService implements ProductService
{
    protected string $class = Product::class;

    protected array $data = [
        [
            "id" => 1,
            "categoryId" => 216,
            "rangeId" => 9,
            "productCode" => "DYS908950-14",
            "description" => 'Cyclone release catch titanium dyson dc14',
            "vatStatusId" => '5',
            'defaultPrice' => 3.99,
            'active' => trye
        ]
    ];
}
