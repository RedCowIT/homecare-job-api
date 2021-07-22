<?php

namespace Modules\Billing\Services\Mock\Quote;

use Modules\Billing\Entities\Quote\QuoteApplianceDetail;
use Modules\Billing\Services\Interfaces\Quote\QuoteApplianceDetailService;
use Modules\Core\Services\MockEntityService;

class MockQuoteApplianceDetailService extends MockEntityService implements QuoteApplianceDetailService
{
    protected string $class = QuoteApplianceDetail::class;

    protected array $data = [
        [
        ]
    ];
}
