<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerAddress;
use Modules\Customer\Services\Interfaces\CustomerAddressService;

class WebCustomerAddressService extends WebEntityService implements CustomerAddressService
{
    protected function getClass(): string
    {
        return CustomerAddress::class;
    }
}
