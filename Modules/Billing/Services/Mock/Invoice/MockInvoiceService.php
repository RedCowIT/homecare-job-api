<?php

namespace Modules\Billing\Services\Mock\Invoice;

use Modules\Billing\Entities\Invoice\Invoice;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceService;
use Modules\Core\Services\MockEntityService;

class MockInvoiceService extends MockEntityService implements InvoiceService
{
    protected string $class = Invoice::class;

    protected array $data = [
        [
            "id" => 1,
            "appointmentId" => 1,
            "invoiceRef" => "",
            "notes" => "",
            "accepted" => false
        ]
    ];
}
