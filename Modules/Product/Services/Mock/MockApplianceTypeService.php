<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\ApplianceType;
use Modules\Product\Services\Interfaces\ApplianceTypeService;

class MockApplianceTypeService extends MockEntityService implements ApplianceTypeService
{
    protected string $class = ApplianceType::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'Vacuum',
            "appImgURL" => ''
        ],
        [
            "id" => 2,
            "description" => 'Oven',
            "appImgURL" => ''
        ]
    ];
}
