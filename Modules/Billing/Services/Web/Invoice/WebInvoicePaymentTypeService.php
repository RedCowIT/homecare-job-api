<?php

namespace Modules\Billing\Services\Web\Invoice;

use Modules\Billing\Entities\Invoice\InvoicePaymentType;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentTypeService;
use Modules\Core\Services\WebEntityService;

class WebInvoicePaymentTypeService extends WebEntityService implements InvoicePaymentTypeService
{
    protected string $class = InvoicePaymentType::class;
}
