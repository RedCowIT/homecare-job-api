<?php

namespace Modules\Billing\Services\Mock\Invoice;

use Modules\Billing\Entities\Invoice\InvoiceItem;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemService;
use Modules\Core\Services\MockEntityService;

class MockInvoiceItemService extends MockEntityService implements InvoiceItemService
{
    protected string $class = InvoiceItem::class;

    protected array $data = [
    ];
}
