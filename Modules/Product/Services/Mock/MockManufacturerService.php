<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\Manufacturer;
use Modules\Product\Services\Interfaces\ManufacturerService;

class MockManufacturerService extends MockEntityService implements ManufacturerService
{
    protected string $class = Manufacturer::class;

    protected array $data = [
        [
            "id" => 1,
            "applianceTypeId" => 1,
            "description" => 'Dyson'
        ],
        [
            "id" => 2,
            "applianceTypeId" => 1,
            "description" => 'Kirby'
        ]
    ];
}
