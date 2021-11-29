<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\Customer;
use Modules\Customer\Services\Interfaces\CustomerService;

class WebCustomerService extends WebEntityService implements CustomerService
{
    protected string $class = Customer::class;
}
