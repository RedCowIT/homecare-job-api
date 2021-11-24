<?php

namespace Modules\Billing\Services\Mock\Invoice;

use Modules\Billing\Entities\Invoice\InvoiceItemType;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemTypeService;
use Modules\Core\Services\MockEntityService;

class MockInvoiceItemTypeService extends MockEntityService implements InvoiceItemTypeService
{
    protected string $class = InvoiceItemType::class;

    protected array $data = [
        [
            'id' => 1,
            'description' => 'Standard'
        ],
        [
            'id' => 2,
            'description' => 'Free Text'
        ],
        [
            'id' => 3,
            'description' => 'Additional Charge'
        ],
        [
            'id' => 4,
            'description' => 'To Order'
        ],
        [
            'id' => 5,
            'description' => 'Engineer Parts'
        ],
        [
            'id' => 6,
            'description' => 'Engineer Plan'
        ],
        [
            'id' => 7,
            'description' => 'Engineer Service'
        ],
        [
            'id' => 8,
            'description' => 'Engineer Misc'
        ]
    ];
}
