<?php

namespace Modules\Billing\Http\Controllers\Quote;

use Modules\Billing\Services\Interfaces\Quote\QuoteApplianceDetailService;
use Modules\Core\Http\Controllers\EntityController;

class QuoteApplianceDetailController extends EntityController
{
    public function __construct(QuoteApplianceDetailService $service)
    {
        parent::__construct($service);
    }
}
