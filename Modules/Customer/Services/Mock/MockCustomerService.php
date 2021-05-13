<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\Customer;
use Modules\Customer\Services\Interfaces\CustomerService;

class MockCustomerService extends MockEntityService implements CustomerService
{
    protected string $class = Customer::class;

    protected array $data = [
        [
            "id" => 1,
            "customerTypeId" => 1,
            "name" => "John Smith",
            "titleId" => 1,
            "phone1" => "01511231234",
            "phone2" => "",
            "email1" => "johnsmith@example.org",
            "email2" => "",
            "DOB" => "1970-11-20",
            "DDReference" => ""
        ]
    ];
}
