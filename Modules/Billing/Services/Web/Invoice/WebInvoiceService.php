<?php

namespace Modules\Billing\Services\Web\Invoice;

use Modules\Billing\Entities\Invoice\Invoice;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceService;
use Modules\Core\Services\WebEntityService;

class WebInvoiceService extends WebEntityService implements InvoiceService
{
    protected string $class = Invoice::class;
}
