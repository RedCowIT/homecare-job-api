<?php

namespace Modules\Billing\Http\Controllers\Quote;

use Modules\Billing\Services\Interfaces\Quote\QuoteProductDetailService;
use Modules\Core\Http\Controllers\EntityController;

class QuoteProductDetailController extends EntityController
{
    public function __construct(QuoteProductDetailService $service)
    {
        parent::__construct($service);
    }
}
