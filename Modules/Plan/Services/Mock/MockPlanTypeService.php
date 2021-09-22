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
            'icon' => '',
            'commercial' => true
        ],
        [
            'id' => 2,
            'description' => 'Appliance Repair Plan',
            'icon' => '',
            'commercial' => true
        ],
        [
            'id' => 3,
            'description' => 'Finance',
            'icon' => '',
            'commercial' => false
        ]
    ];
}
