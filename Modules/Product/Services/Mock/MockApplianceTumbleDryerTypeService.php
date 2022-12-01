<?php

namespace Modules\Product\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Product\Entities\ApplianceTumbleDryerType;
use Modules\Product\Services\Interfaces\ApplianceInstallTypeService;

class MockApplianceTumbleDryerTypeService extends MockEntityService implements ApplianceInstallTypeService
{
    protected string $class = ApplianceTumbleDryerType::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'Tumble dryer type 1'
        ],
    ];
}
