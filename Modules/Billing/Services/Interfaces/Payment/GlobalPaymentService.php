<?php

namespace Modules\Billing\Services\Interfaces\Payment;

interface GlobalPaymentService {
    function createPaymentCharge(array $data);
    function processPaymentResponse(array $data);
}
