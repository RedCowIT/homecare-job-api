<?php

namespace Modules\Billing\Services\Web\Invoice;

use Modules\Billing\Entities\Invoice\InvoiceItem;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemService;
use Modules\Core\Services\WebEntityService;

class WebInvoiceItemService extends WebEntityService implements InvoiceItemService
{
    protected string $class = InvoiceItem::class;
}
