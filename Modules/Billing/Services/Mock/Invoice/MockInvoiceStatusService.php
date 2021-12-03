<?php

namespace Modules\Billing\Services\Mock\Invoice;

use Modules\Billing\Entities\Invoice\InvoiceStatus;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceStatusService;
use Modules\Core\Services\MockEntityService;

class MockInvoiceStatusService extends MockEntityService implements InvoiceStatusService
{
    protected string $class = InvoiceStatus::class;

    protected array $data = [
        [
            'id' => 1,
            'description' => 'Outstanding'
        ],
        [
            'id' => 2,
            'description' => 'Paid'
        ],
        [
            'id' => 3,
            'description' => 'Void'
        ],
        [
            'id' => 4,
            'description' => 'Engineer Pending'
        ]
    ];
}
