<?php

namespace Modules\Plan\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Plan\Entities\Plan;
use Modules\Plan\Services\Interfaces\PlanService;

class MockPlanService extends MockEntityService implements PlanService
{
    protected string $class = Plan::class;

    protected array $data = [
        [
            'id' => 1,
            'planTypeId' => 1,
            'productId' => 1,
            'description' => 'Vacuum Service Plan',
            'name' => 'Vacuum Service',
            'appImgURL' => ''
        ],
        [
            'id' => 2,
            'planTypeId' => 2,
            'productId' => 2,
            'description' => 'Microwave Plan',
            'name' => 'Microwave Plan',
            'appImgURL' => ''
        ]
    ];
}
