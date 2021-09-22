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
            'description' => 'Appliance'
        ],
        [
            'id' => 2,
            'description' => 'Plan'
        ],
        [
            'id' => 3,
            'description' => 'Product'
        ]
    ];
}
