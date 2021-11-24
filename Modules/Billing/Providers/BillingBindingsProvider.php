<?php

namespace Modules\Billing\Providers;

use Modules\Billing\Services\Interfaces\Invoice\InvoiceApplianceDetailService;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemService;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemTypeService;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentService;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentTypeService;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePlanDetailService;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceProductDetailService;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceService;
use Modules\Billing\Services\Interfaces\Quote\QuoteApplianceDetailService;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemService;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemTypeService;
use Modules\Billing\Services\Interfaces\Quote\QuotePlanDetailService;
use Modules\Billing\Services\Interfaces\Quote\QuoteProductDetailService;
use Modules\Billing\Services\Interfaces\Quote\QuoteService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceApplianceDetailService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceItemService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceItemTypeService;
use Modules\Billing\Services\Mock\Invoice\MockInvoicePaymentService;
use Modules\Billing\Services\Mock\Invoice\MockInvoicePaymentTypeService;
use Modules\Billing\Services\Mock\Invoice\MockInvoicePlanDetailService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceProductDetailService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceService;
use Modules\Billing\Services\Mock\Quote\MockQuoteApplianceDetailService;
use Modules\Billing\Services\Mock\Quote\MockQuoteItemService;
use Modules\Billing\Services\Mock\Quote\MockQuoteItemTypeService;
use Modules\Billing\Services\Mock\Quote\MockQuotePlanDetailService;
use Modules\Billing\Services\Mock\Quote\MockQuoteProductDetailService;
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
            QuoteProductDetailService::class => [
                'mock' => MockQuoteProductDetailService::class,
                'api' => null
            ],
            QuotePlanDetailService::class => [
                'mock' => MockQuotePlanDetailService::class,
                'api' => null
            ],
            InvoiceService::class => [
                'mock' => MockInvoiceService::class,
                'api' => null
            ],
            InvoiceItemService::class => [
                'mock' => MockInvoiceItemService::class,
                'api' => null
            ],
            InvoiceItemTypeService::class => [
                'mock' => MockInvoiceItemTypeService::class,
                'api' => null
            ],
            InvoicePaymentService::class => [
                'mock' => MockInvoicePaymentService::class,
                'api' => null
            ],
            InvoicePaymentTypeService::class => [
                'mock' => MockInvoicePaymentTypeService::class,
                'api' => null
            ]
        ];
    }
}
