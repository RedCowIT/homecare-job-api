<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\CallType;
use Modules\Appointment\Services\Interfaces\CallTypeService;
use Modules\Core\Services\WebEntityService;

class WebCallTypeService extends WebEntityService implements CallTypeService
{
    protected string $class = CallType::class;
}
