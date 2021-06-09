<?php

namespace Modules\Plan\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Plan\Entities\PlanType;
use Modules\Plan\Services\Interfaces\PlanTypeService;

class MockPlanTypeService extends MockEntityService implements PlanTypeService
{
    protected string $class = PlanType::class;

    protected array $data = [
        [
            'id' => 1,
            'description' => 'Vacuum Service Plan',
            'appImgURL' => ''
        ],
        [
            'id' => 2,
            'description' => 'Appliance Repair Plan',
            'appImgURL' => ''
        ],
        [
            'id' => 3,
            'description' => 'Finance',
            'appImgURL' => ''
        ]
    ];
}
