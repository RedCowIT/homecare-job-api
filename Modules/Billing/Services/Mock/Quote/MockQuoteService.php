<?php

namespace Modules\Billing\Services\Mock\Quote;

use Modules\Billing\Entities\Quote\Quote;
use Modules\Billing\Services\Interfaces\Quote\QuoteService;
use Modules\Core\Services\MockEntityService;

class MockQuoteService extends MockEntityService implements QuoteService
{
    protected string $class = Quote::class;

    protected array $data = [
        [
            "id" => 1,
            "appointmentId" => 1,
            "quoteRef" => "",
            "notes" => "",
            "accepted" => false
        ]
    ];
}
