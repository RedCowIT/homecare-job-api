<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerService;

class CustomerController extends EntityController
{
    public function __construct(CustomerService $service)
    {
        parent::__construct($service);
    }
}
