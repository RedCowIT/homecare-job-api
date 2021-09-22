<?php

namespace Modules\Billing\Http\Controllers\Invoice;

use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemService;
use Modules\Core\Http\Controllers\EntityController;

class InvoiceItemController extends EntityController
{
    public function __construct(InvoiceItemService $service)
    {
        parent::__construct($service);
    }
}
