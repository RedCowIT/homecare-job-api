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
            "customerId" => 1,
            "invoiceNumber" => "E65695X",
            "invoiceDate" => "2021-12-01 00:00:00.000",
            "notes" => "",
            "grossAmount" => 29.99,
            "totalNetAmount" => 24.99,
            "totalVATAmount" => 5,
            "invoiceStatusId" => 1,
            "published" => 0
        ]
    ];

    function save($model)
    {
        return $this->data[0];
    }
}
