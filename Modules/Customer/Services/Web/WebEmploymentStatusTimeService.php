<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\EmploymentStatusTime;
use Modules\Customer\Services\Interfaces\EmploymentStatusTimeService;

class WebEmploymentStatusTimeService extends WebEntityService implements EmploymentStatusTimeService
{
    protected string $class = EmploymentStatusTime::class;
}
