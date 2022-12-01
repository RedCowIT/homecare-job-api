<?php

namespace Modules\Billing\Providers;

use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemService;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemTypeService;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentService;
use Modules\Billing\Services\Interfaces\Invoice\InvoicePaymentTypeService;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceService;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceStatusService;
use Modules\Billing\Services\Interfaces\Payment\CardPaymentService;
use Modules\Billing\Services\Interfaces\Payment\GlobalPaymentService;
use Modules\Billing\Services\Interfaces\PendingPayment\PendingPaymentService;
use Modules\Billing\Services\Interfaces\Quote\QuoteApplianceDetailService;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemService;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemTypeService;
use Modules\Billing\Services\Interfaces\Quote\QuotePlanDetailService;
use Modules\Billing\Services\Interfaces\Quote\QuoteProductDetailService;
use Modules\Billing\Services\Interfaces\Quote\QuoteService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceItemService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceItemTypeService;
use Modules\Billing\Services\Mock\Invoice\MockInvoicePaymentService;
use Modules\Billing\Services\Mock\Invoice\MockInvoicePaymentTypeService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceService;
use Modules\Billing\Services\Mock\Invoice\MockInvoiceStatusService;
use Modules\Billing\Services\Mock\Payment\MockCardPaymentService;
use Modules\Billing\Services\Mock\Payment\MockGlobalPaymentService;
use Modules\Billing\Services\Mock\PendingPayment\MockPendingPaymentService;
use Modules\Billing\Services\Mock\Quote\MockQuoteApplianceDetailService;
use Modules\Billing\Services\Mock\Quote\MockQuoteItemService;
use Modules\Billing\Services\Mock\Quote\MockQuoteItemTypeService;
use Modules\Billing\Services\Mock\Quote\MockQuotePlanDetailService;
use Modules\Billing\Services\Mock\Quote\MockQuoteProductDetailService;
use Modules\Billing\Services\Mock\Quote\MockQuoteService;
use Modules\Billing\Services\Web\Invoice\WebInvoiceItemService;
use Modules\Billing\Services\Web\Invoice\WebInvoiceItemTypeService;
use Modules\Billing\Services\Web\Invoice\WebInvoicePaymentService;
use Modules\Billing\Services\Web\Invoice\WebInvoicePaymentTypeService;
use Modules\Billing\Services\Web\Invoice\WebInvoiceService;
use Modules\Billing\Services\Web\Invoice\WebInvoiceStatusService;
use Modules\Billing\Services\Web\Payment\WebCardPaymentService;
use Modules\Billing\Services\Web\Payment\WebGlobalPaymentService;
use Modules\Billing\Services\Web\PendingPayment\WebPendingPaymentService;
use Modules\Billing\Services\Web\Quote\WebQuoteApplianceDetailService;
use Modules\Billing\Services\Web\Quote\WebQuoteItemService;
use Modules\Billing\Services\Web\Quote\WebQuoteItemTypeService;
use Modules\Billing\Services\Web\Quote\WebQuotePlanDetailService;
use Modules\Billing\Services\Web\Quote\WebQuoteProductDetailService;
use Modules\Billing\Services\Web\Quote\WebQuoteService;
use Modules\Core\Providers\BindingsServiceProvider;

class BillingBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            CardPaymentService::class => [
                'mock' => MockCardPaymentService::class,
                'api' => WebCardPaymentService::class
            ],
            QuoteService::class => [
                'mock' => MockQuoteService::class,
                'api' => WebQuoteService::class
            ],
            QuoteItemService::class => [
                'mock' => MockQuoteItemService::class,
                'api' => WebQuoteItemService::class
            ],
            QuoteItemTypeService::class => [
                'mock' => MockQuoteItemTypeService::class,
                'api' => WebQuoteItemTypeService::class
            ],
            QuoteApplianceDetailService::class => [
                'mock' => MockQuoteApplianceDetailService::class,
                'api' => WebQuoteApplianceDetailService::class
            ],
            QuoteProductDetailService::class => [
                'mock' => MockQuoteProductDetailService::class,
                'api' => WebQuoteProductDetailService::class
            ],
            QuotePlanDetailService::class => [
                'mock' => MockQuotePlanDetailService::class,
                'api' => WebQuotePlanDetailService::class
            ],
            InvoiceService::class => [
                'mock' => MockInvoiceService::class,
                'api' => WebInvoiceService::class
            ],
            InvoiceItemService::class => [
                'mock' => MockInvoiceItemService::class,
                'api' => WebInvoiceItemService::class
            ],
            InvoiceStatusService::class => [
                'mock' => MockInvoiceStatusService::class,
                'api' => WebInvoiceStatusService::class
            ],
            InvoiceItemTypeService::class => [
                'mock' => MockInvoiceItemTypeService::class,
                'api' => WebInvoiceItemTypeService::class
            ],
            InvoicePaymentService::class => [
                'mock' => MockInvoicePaymentService::class,
                'api' => WebInvoicePaymentService::class
            ],
            InvoicePaymentTypeService::class => [
                'mock' => MockInvoicePaymentTypeService::class,
                'api' => WebInvoicePaymentTypeService::class
            ],
            GlobalPaymentService::class => [
                'mock' => MockGlobalPaymentService::class,
                'api' => WebGlobalPaymentService::class
            ],
            PendingPaymentService::class => [
                'mock' => MockPendingPaymentService::class,
                'api' => WebPendingPaymentService::class
            ]
        ];
    }
}
