<?php

namespace Modules\Billing\Services\Web\Quote;

use Modules\Billing\Entities\Quote\QuoteProductDetail;
use Modules\Billing\Services\Interfaces\Quote\QuoteProductDetailService;
use Modules\Core\Services\WebEntityService;

class WebQuoteProductDetailService extends WebEntityService implements QuoteProductDetailService
{
    protected string $class = QuoteProductDetail::class;
}
