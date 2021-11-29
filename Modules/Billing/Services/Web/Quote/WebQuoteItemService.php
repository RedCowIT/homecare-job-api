<?php

namespace Modules\Billing\Services\Web\Quote;

use Modules\Billing\Entities\Quote\QuoteItem;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemService;
use Modules\Core\Services\WebEntityService;

class WebQuoteItemService extends WebEntityService implements QuoteItemService
{
    protected string $class = QuoteItem::class;
}
