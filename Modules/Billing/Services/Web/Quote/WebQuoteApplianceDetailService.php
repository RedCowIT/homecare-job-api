<?php

namespace Modules\Billing\Services\Web\Quote;

use Modules\Billing\Entities\Quote\QuoteApplianceDetail;
use Modules\Billing\Services\Interfaces\Quote\QuoteApplianceDetailService;
use Modules\Core\Services\WebEntityService;

class WebQuoteApplianceDetailService extends WebEntityService implements QuoteApplianceDetailService
{
    protected string $class = QuoteApplianceDetail::class;
}
