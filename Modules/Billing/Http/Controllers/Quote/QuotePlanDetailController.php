<?php

namespace Modules\Billing\Http\Controllers\Quote;

use Modules\Billing\Services\Interfaces\Quote\QuotePlanDetailService;
use Modules\Core\Http\Controllers\EntityController;

class QuotePlanDetailController extends EntityController
{
    public function __construct(QuotePlanDetailService $service)
    {
        parent::__construct($service);
    }
}
