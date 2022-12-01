<?php

namespace Modules\Billing\Services\Web\PendingPayment;

use Modules\Billing\Entities\PendingPayment\PendingPayment;
use Modules\Billing\Services\Interfaces\PendingPayment\PendingPaymentService;
use Modules\Core\Services\WebEntityService;

class WebPendingPaymentService extends WebEntityService implements PendingPaymentService
{
    protected string $class = PendingPayment::class;
}
