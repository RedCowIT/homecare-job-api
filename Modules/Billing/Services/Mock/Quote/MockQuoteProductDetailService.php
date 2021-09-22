<?php

namespace Modules\Billing\Services\Mock\Quote;

use Modules\Billing\Entities\Quote\QuoteProductDetail;
use Modules\Billing\Services\Interfaces\Quote\QuoteProductDetailService;
use Modules\Core\Services\MockEntityService;

class MockQuoteProductDetailService extends MockEntityService implements QuoteProductDetailService
{
    protected string $class = QuoteProductDetail::class;

    protected array $data = [
        [
        ]
    ];
}
