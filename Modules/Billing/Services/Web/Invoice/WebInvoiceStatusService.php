<?php

namespace Modules\Billing\Services\Web\Invoice;

use Modules\Billing\Entities\Invoice\InvoiceStatus;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceStatusService;
use Modules\Core\Services\WebEntityService;

class WebInvoiceStatusService extends WebEntityService implements InvoiceStatusService
{
    protected string $class = InvoiceStatus::class;
}
