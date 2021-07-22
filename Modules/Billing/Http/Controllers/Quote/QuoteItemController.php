<?php

namespace Modules\Billing\Http\Controllers\Quote;

use Modules\Billing\Services\Interfaces\Quote\QuoteItemService;
use Modules\Core\Http\Controllers\EntityController;

class QuoteItemController extends EntityController
{
    public function __construct(QuoteItemService $service)
    {
        parent::__construct($service);
    }
}
