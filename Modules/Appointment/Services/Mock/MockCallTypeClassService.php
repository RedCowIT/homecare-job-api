<?php

namespace Modules\Appointment\Services\Mock;

use Modules\Appointment\Entities\CallTypeClass;
use Modules\Appointment\Services\Interfaces\CallTypeClassService;
use Modules\Core\Services\MockEntityService;

class MockCallTypeClassService extends MockEntityService implements CallTypeClassService
{
    protected string $class = CallTypeClass::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => "Fresh",
        ],
        [
            "id" => 2,
            "description" => "Free",
        ],
        [
            "id" => 3,
            "description" => "NCO",
        ]
    ];
}
