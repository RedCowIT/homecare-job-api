<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\ProductCategory;
use Modules\Product\Services\Interfaces\ProductCategoryService;
use Modules\Product\Services\Interfaces\ProductService;

class MockProductCategoryService extends MockEntityService implements ProductCategoryService
{
    protected string $class = ProductCategory::class;

    protected array $data = [
        [
            "id" => 1,
            "productTypeId" => 1,
            "code" => "006",
            "description" => 'Service',
            "shortName" => 'Serv.'
        ],
        [
            "id" => 2,
            "productTypeId" => 1,
            "code" => "005",
            "description" => 'Parts',
            "shortName" => 'Parts'
        ]
    ];
}
