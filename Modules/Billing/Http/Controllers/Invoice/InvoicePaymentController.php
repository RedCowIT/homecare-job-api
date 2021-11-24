<?php

namespace Modules\Billing\Http\Controllers\Invoice;

use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentService;
use Modules\Core\Http\Controllers\EntityController;

class InvoicePaymentController extends EntityController
{
    public function __construct(InvoicePaymentService $service)
    {
        parent::__construct($service);
    }
}
