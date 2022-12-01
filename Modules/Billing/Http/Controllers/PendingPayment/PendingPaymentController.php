<?php

namespace Modules\Billing\Http\Controllers\PendingPayment;

use Modules\Billing\Services\Interfaces\PendingPayment\PendingPaymentService;
use Modules\Core\Http\Controllers\EntityController;

class PendingPaymentController extends EntityController
{
    public function __construct(PendingPaymentService $service)
    {
        parent::__construct($service);
    }
}
