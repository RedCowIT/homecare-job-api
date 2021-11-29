<?php

namespace Modules\Billing\Services\Web\Quote;

use Modules\Billing\Entities\Quote\QuoteItemType;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemTypeService;
use Modules\Core\Services\WebEntityService;

class WebQuoteItemTypeService extends WebEntityService implements QuoteItemTypeService
{
    protected string $class = QuoteItemType::class;
}
