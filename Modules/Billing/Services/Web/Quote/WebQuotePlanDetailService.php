<?php

namespace Modules\Billing\Services\Web\Quote;

use Modules\Billing\Entities\Quote\QuotePlanDetail;
use Modules\Billing\Services\Interfaces\Quote\QuotePlanDetailService;
use Modules\Core\Services\WebEntityService;

class WebQuotePlanDetailService extends WebEntityService implements QuotePlanDetailService
{
    protected string $class = QuotePlanDetail::class;
}
