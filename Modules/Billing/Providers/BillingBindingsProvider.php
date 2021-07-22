<?php

namespace Modules\Billing\Providers;

use Modules\Billing\Services\Interfaces\Quote\QuoteApplianceDetailService;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemService;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemTypeService;
use Modules\Billing\Services\Interfaces\Quote\QuoteService;
use Modules\Billing\Services\Mock\Quote\MockQuoteApplianceDetailService;
use Modules\Billing\Services\Mock\Quote\MockQuoteItemService;
use Modules\Billing\Services\Mock\Quote\MockQuoteItemTypeService;
use Modules\Billing\Services\Mock\Quote\MockQuoteService;
use Modules\Core\Providers\BindingsServiceProvider;

class BillingBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            QuoteService::class => [
                'mock' => MockQuoteService::class,
                'api' => null
            ],
            QuoteItemService::class => [
                'mock' => MockQuoteItemService::class,
                'api' => null
            ],
            QuoteItemTypeService::class => [
                'mock' => MockQuoteItemTypeService::class,
                'api' => null
            ],
            QuoteApplianceDetailService::class => [
                'mock' => MockQuoteApplianceDetailService::class,
                'api' => null
            ],
        ];
    }
}
