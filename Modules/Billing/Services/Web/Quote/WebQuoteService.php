<?php

namespace Modules\Billing\Services\Web\Quote;

use Modules\Billing\Entities\Quote\Quote;
use Modules\Billing\Services\Interfaces\Quote\QuoteService;
use Modules\Core\Services\WebEntityService;

class WebQuoteService extends WebEntityService implements QuoteService
{
    protected string $class = Quote::class;
}
