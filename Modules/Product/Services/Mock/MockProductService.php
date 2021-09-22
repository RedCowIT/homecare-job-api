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
            "categoryId" => 232,
            "rangeId" => null,
            "productCode" => "HH400",
            "description" => 'Powersonic Cordless Handheld Vacuum Cleaner',
            "vatStatusId" => '5',
            'defaultPrice' => 379,
            'active' => true
        ]
    ];
}
