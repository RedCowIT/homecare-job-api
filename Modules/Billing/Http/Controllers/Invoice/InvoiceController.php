<?php

namespace Modules\Billing\Http\Controllers\Invoice;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceService;
use Modules\Core\Http\Controllers\EntityController;

class InvoiceController extends EntityController
{
    public function __construct(InvoiceService $service)
    {
        parent::__construct($service);
    }

    public function emailInvoice(Request $request, $invoiceId)
    {
        $response = $this->entityService->emailInvoice($invoiceId, $request->input('toAddress'));

        logger()->info('emailInvoice', ['response' => $response]);

        return new JsonResponse();
    }

    public function postInvoice(Request $request, $invoiceId)
    {
        $response = $this->entityService->postInvoice($invoiceId);

        logger()->info('postInvoice', ['response' => $response]);

        return new JsonResponse();
    }
}
