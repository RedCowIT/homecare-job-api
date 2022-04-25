<?php

namespace Modules\Billing\Services\Web\Payment;

use Modules\Billing\Entities\CardPayment\CardPayment;
use Modules\Billing\Services\Interfaces\Payment\CardPaymentService;
use Modules\Core\Services\WebEntityService;

class WebCardPaymentService extends WebEntityService implements CardPaymentService
{
    protected string $class = CardPayment::class;
}
