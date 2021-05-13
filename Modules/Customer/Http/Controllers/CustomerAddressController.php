<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerAddressService;

class CustomerAddressController extends EntityController
{
    public function __construct(CustomerAddressService $service)
    {
        parent::__construct($service);
    }
}
