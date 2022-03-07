<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\EmploymentStatus;
use Modules\Customer\Services\Interfaces\EmploymentStatusService;

class WebEmploymentStatusService extends WebEntityService implements EmploymentStatusService
{
    protected string $class = EmploymentStatus::class;
}
