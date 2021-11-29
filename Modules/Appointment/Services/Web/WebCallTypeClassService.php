<?php

namespace Modules\Appointment\Services\Web;

use Modules\Appointment\Entities\CallTypeClass;
use Modules\Appointment\Services\Interfaces\CallTypeClassService;
use Modules\Core\Services\WebEntityService;

class WebCallTypeClassService extends WebEntityService implements CallTypeClassService
{
    protected string $class = CallTypeClass::class;
}
