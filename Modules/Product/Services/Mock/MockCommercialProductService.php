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
            "icon" => "vacuum",
            "image_1" => 'https://m.media-amazon.com/images/I/61pW7JXlMML._AC_SY355_.jpg',
            'description' => 'Electric floor roller brush, Electric mite-removal brush, Two-in-one sofa brush, Two-in-one flat brush, Conductive metal tube. Easy release tool buttons & Docking station to store your machine - 12 month guarantee'
        ]
    ];
}
