<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\CallType;
use Modules\Appointment\Services\Interfaces\CallTypeService;
use Modules\Core\Services\MockEntityService;

class MockCallTypeService extends MockEntityService implements CallTypeService
{
    protected string $class = CallType::class;

    protected array $data = [
        [
            "id" => 1,
            "active" => true,
            "description" => "Free Shampoo",
            "customerDescription" => "Shampoo",
            "photoRequired" => true,
            "service" => true,
            "carpet" => true,
            "clean" => false,
            "vacuum" => false,
            "callTypeClassId" => 2
        ],
        [
            "id" => 2,
            "active" => true,
            "description" => "Fresh Dyson Service",
            "customerDescription" => "Dyson Service",
            "photoRequired" => true,
            "service" => true,
            "carpet" => false,
            "clean" => false,
            "vacuum" => true,
            "callTypeClassId" => 1
        ],
        [
            "id" => 3,
            "active" => true,
            "description" => "Delivery",
            "customerDescription" => "Delivery",
            "photoRequired" => true,
            "service" => false,
            "carpet" => false,
            "clean" => false,
            "vacuum" => false,
            "callTypeClassId" => 3
        ]
    ];
}
