<?php

namespace Modules\Billing\Http\Controllers\Invoice;

use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemTypeService;
use Modules\Core\Http\Controllers\EntityController;

class InvoiceItemTypeController extends EntityController
{
    public function __construct(InvoiceItemTypeService $service)
    {
        parent::__construct($service);
    }
}
