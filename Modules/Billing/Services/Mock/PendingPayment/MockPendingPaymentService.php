<?php

namespace Modules\Billing\Services\Mock\PendingPayment;

use Modules\Billing\Entities\PendingPayment\PendingPayment;
use Modules\Billing\Services\Interfaces\PendingPayment\PendingPaymentService;
use Modules\Core\Services\MockEntityService;

class MockPendingPaymentService extends MockEntityService implements PendingPaymentService
{
    protected string $class = PendingPayment::class;

    protected array $data = [
        [
            'id' => 1,
            'invoiceNumber' => '001',
            'invoiceDate' => '01/01/2022',
            'paymentType' => 'CARD',
            'amount' => 10,
            'invoiceAmount' => 15
        ]
    ];
}
