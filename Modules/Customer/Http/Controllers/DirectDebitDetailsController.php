<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\DirectDebitDetailsService;

class DirectDebitDetailsController extends EntityController
{
    public function __construct(DirectDebitDetailsService $service)
    {
        parent::__construct($service);
    }
}
