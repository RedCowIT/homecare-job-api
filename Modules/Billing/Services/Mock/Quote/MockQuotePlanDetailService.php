<?php

namespace Modules\Billing\Services\Mock\Quote;

use Modules\Billing\Entities\Quote\QuotePlanDetail;
use Modules\Billing\Services\Interfaces\Quote\QuotePlanDetailService;
use Modules\Core\Services\MockEntityService;

class MockQuotePlanDetailService extends MockEntityService implements QuotePlanDetailService
{
    protected string $class = QuotePlanDetail::class;

    protected array $data = [
        [
        ]
    ];
}
