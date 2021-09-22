<?php

namespace Modules\Billing\Http\Controllers\Invoice;

use Modules\Billing\Services\Interfaces\Invoice\InvoiceService;
use Modules\Core\Http\Controllers\EntityController;

class InvoiceController extends EntityController
{
    public function __construct(InvoiceService $service)
    {
        parent::__construct($service);
    }
}
