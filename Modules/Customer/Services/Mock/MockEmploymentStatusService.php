<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\EmploymentStatus;
use Modules\Customer\Services\Interfaces\EmploymentStatusService;

class MockEmploymentStatusService extends MockEntityService implements EmploymentStatusService
{
    protected string $class = EmploymentStatus::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'Employed'
        ]
    ];
}
