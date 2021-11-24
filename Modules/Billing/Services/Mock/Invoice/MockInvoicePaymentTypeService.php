<?php

namespace Modules\Billing\Services\Mock\Invoice;

use Modules\Billing\Entities\Invoice\InvoicePayment;
use Modules\Billing\Entities\Invoice\InvoicePaymentType;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentService;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentTypeService;
use Modules\Core\Services\MockEntityService;

class MockInvoicePaymentTypeService extends MockEntityService implements InvoicePaymentTypeService
{
    protected string $class = InvoicePaymentType::class;

    protected array $data = [
        [
            'id' => 1,
            'description' => 'Cash'
        ],
        [
            'id' => 2,
            'description' => 'Card'
        ],
        [
            'id' => 3,
            'description' => 'Cheque'
        ],
        [
            'id' => 4,
            'description' => 'Finance'
        ]
    ];
}
