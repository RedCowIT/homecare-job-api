<?php

namespace Modules\Billing\Http\Controllers\Invoice;

use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentTypeService;
use Modules\Core\Http\Controllers\EntityController;

class InvoicePaymentTypeController extends EntityController
{
    public function __construct(InvoicePaymentTypeService $service)
    {
        parent::__construct($service);
    }
}
