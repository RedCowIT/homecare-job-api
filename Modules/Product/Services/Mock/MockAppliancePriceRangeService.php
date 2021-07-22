<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\AppliancePriceRange;
use Modules\Product\Entities\ApplianceType;
use Modules\Product\Services\Interfaces\AppliancePriceRangeService;
use Modules\Product\Services\Interfaces\ApplianceTypeService;

class MockAppliancePriceRangeService extends MockEntityService implements AppliancePriceRangeService
{
    protected string $class = AppliancePriceRange::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => '£10 - £99',
            "fromPrice" => 10,
            "toPrice" => 99,
            "chargeMultiplier" => 0.5
        ],
        [
            "id" => 2,
            "description" => '£100 - £199',
            "fromPrice" => 100,
            "toPrice" => 199,
            "chargeMultiplier" => 0.5
        ],
        [
            "id" => 3,
            "description" => '£200 - £299',
            "fromPrice" => 200,
            "toPrice" => 299,
            "chargeMultiplier" => 0.5
        ],
    ];
}
