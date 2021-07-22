<?php

namespace Modules\Billing\Http\Controllers\Quote;

use Modules\Billing\Services\Interfaces\Quote\QuoteItemTypeService;
use Modules\Core\Http\Controllers\EntityController;

class QuoteItemTypeController extends EntityController
{
    public function __construct(QuoteItemTypeService $service)
    {
        parent::__construct($service);
    }
}
