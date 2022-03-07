<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\EmploymentStatusTime;
use Modules\Customer\Services\Interfaces\EmploymentStatusTimeService;

class MockEmploymentStatusTimeService extends MockEntityService implements EmploymentStatusTimeService
{
    protected string $class = EmploymentStatusTime::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => '< 1'
        ]
    ];
}
