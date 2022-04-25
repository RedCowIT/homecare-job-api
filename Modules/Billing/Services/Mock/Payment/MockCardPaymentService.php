<?php

namespace Modules\Billing\Services\Mock\Payment;

use Modules\Billing\Entities\CardPayment\CardPayment;
use Modules\Billing\Services\Interfaces\Payment\CardPaymentService;
use Modules\Core\Services\MockEntityService;

class MockCardPaymentService extends MockEntityService implements CardPaymentService
{
    protected string $class = CardPayment::class;

    protected array $data = [
        [
        ]
    ];
}
