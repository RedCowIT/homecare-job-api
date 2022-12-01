<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\ApplianceFuelType;
use Modules\Product\Entities\ApplianceType;
use Modules\Product\Services\Interfaces\ApplianceFuelTypeService;
use Modules\Product\Services\Interfaces\ApplianceTypeService;

class MockApplianceFuelTypeService extends MockEntityService implements ApplianceFuelTypeService
{
    protected string $class = ApplianceFuelType::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'fuel type 1',
        ]
    ];
}
