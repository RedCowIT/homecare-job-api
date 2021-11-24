<?php

namespace Modules\Billing\Services\Mock\Invoice;

use Modules\Billing\Entities\Invoice\InvoicePayment;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentService;
use Modules\Core\Services\MockEntityService;

class MockInvoicePaymentService extends MockEntityService implements InvoicePaymentService
{
    protected string $class = InvoicePayment::class;

    protected array $data = [
        [

        ]
    ];
}
