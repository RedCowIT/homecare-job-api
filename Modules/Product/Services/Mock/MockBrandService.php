<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\Brand;
use Modules\Product\Services\Interfaces\BrandService;

class MockBrandService extends MockEntityService implements BrandService
{
    protected string $class = Brand::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'Hoover'
        ],
        [
            "id" => 2,
            "description" => 'Dyson'
        ],
        [
            "id" => 3,
            "description" => 'Hotpoint'
        ],
        [
            "id" => 4,
            "description" => 'DeLonghi'
        ]
    ];
}
