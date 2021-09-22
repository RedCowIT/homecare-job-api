<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\CommercialProduct;
use Modules\Product\Services\Interfaces\CommercialProductService;

class MockCommercialProductService extends MockEntityService implements CommercialProductService
{
    protected string $class = CommercialProduct::class;

    protected array $data = [
        [
            "id" => 1,
            "productId" => 1,
            "icon" => "vacuum"
        ]
    ];
}
