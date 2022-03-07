<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\ResidentialStatusService;

class ResidentialStatusController extends EntityController
{
    public function __construct(ResidentialStatusService $service)
    {
        parent::__construct($service);
    }
}
