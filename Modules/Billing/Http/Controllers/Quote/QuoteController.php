<?php

namespace Modules\Billing\Http\Controllers\Quote;

use Modules\Billing\Services\Interfaces\Quote\QuoteService;
use Modules\Core\Http\Controllers\EntityController;

class QuoteController extends EntityController
{
    public function __construct(QuoteService $service)
    {
        parent::__construct($service);
    }
}
