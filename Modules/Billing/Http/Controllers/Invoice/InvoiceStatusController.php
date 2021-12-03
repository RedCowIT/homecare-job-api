<?php

namespace Modules\Billing\Http\Controllers\Invoice;

use Modules\Billing\Services\Interfaces\Invoice\InvoiceStatusService;
use Modules\Core\Http\Controllers\EntityController;

class InvoiceStatusController extends EntityController
{
    public function __construct(InvoiceStatusService $service)
    {
        parent::__construct($service);
    }
}
