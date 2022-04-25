<?php

namespace Modules\Billing\Http\Controllers\Payment;

use Modules\Billing\Services\Interfaces\Payment\CardPaymentService;
use Modules\Core\Http\Controllers\EntityController;

class CardPaymentController extends EntityController
{
    public function __construct(CardPaymentService $service)
    {
        parent::__construct($service);
    }
}
