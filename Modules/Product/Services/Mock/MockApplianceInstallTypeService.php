<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\ApplianceInstallType;
use Modules\Product\Services\Interfaces\ApplianceInstallTypeService;

class MockApplianceInstallTypeService extends MockEntityService implements ApplianceInstallTypeService
{
    protected string $class = ApplianceInstallType::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'Install type 1'
        ],
    ];
}
