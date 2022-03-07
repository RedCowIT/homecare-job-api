<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\ResidentialStatus;
use Modules\Customer\Services\Interfaces\ResidentialStatusService;

class WebResidentialStatusService extends WebEntityService implements ResidentialStatusService
{
    protected string $class = ResidentialStatus::class;
}
