<?php

namespace Modules\Billing\Services\Mock\Payment;

use Modules\Billing\Services\Interfaces\Payment\GlobalPaymentService;

class MockGlobalPaymentService implements GlobalPaymentService
{
    function createPaymentCharge(array $data){
        return [];
    }

    function processPaymentResponse(array $data)
    {
        // TODO: Implement processResponse() method.
    }
}
