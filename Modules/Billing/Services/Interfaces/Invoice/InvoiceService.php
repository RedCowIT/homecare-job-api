<?php

namespace Modules\Billing\Services\Interfaces\Invoice;

use Modules\Core\Services\EntityService;

interface InvoiceService extends EntityService {

    function emailInvoice($invoiceId, $toAddress);

}
