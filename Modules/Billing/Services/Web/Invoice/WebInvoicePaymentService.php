<?php

namespace Modules\Billing\Services\Web\Invoice;

use Modules\Billing\Entities\Invoice\InvoicePayment;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentService;
use Modules\Core\Services\WebEntityService;

class WebInvoicePaymentService extends WebEntityService implements InvoicePaymentService
{
    protected string $class = InvoicePayment::class;
}
