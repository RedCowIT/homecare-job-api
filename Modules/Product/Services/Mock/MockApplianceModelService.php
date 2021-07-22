<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\ApplianceModel;
use Modules\Product\Services\Interfaces\ApplianceModelService;

class MockApplianceModelService extends MockEntityService implements ApplianceModelService
{
    protected string $class = ApplianceModel::class;

    protected array $data = [
        [
            "id" => 1,
            "manufacturerId" => 1,
            "description" => 'DC04 Clutch'
        ],
        [
            "id" => 2,
            "manufacturerId" => 2,
            "description" => 'Ultimate G'
        ]
    ];
}
