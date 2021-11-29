<?php

namespace Modules\Billing\Services\Web\Invoice;

use Modules\Billing\Entities\Invoice\InvoiceItemType;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemTypeService;
use Modules\Core\Services\WebEntityService;

class WebInvoiceItemTypeService extends WebEntityService implements InvoiceItemTypeService
{
    protected string $class = InvoiceItemType::class;
}
