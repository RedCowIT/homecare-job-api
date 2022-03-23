<?php

namespace Modules\Billing\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Billing\Services\Interfaces\Payment\GlobalPaymentService;

class GlobalPaymentController extends Controller
{
    private $globalPaymentsService;

    public function __construct(GlobalPaymentService $globalPaymentService)
    {
        $this->globalPaymentsService = $globalPaymentService;
    }

    public function createPaymentCharge(Request $request)
    {
        logger()->info('global payment init');

        $response = $this->globalPaymentsService->createPaymentCharge($request->all());

        return new JsonResponse(['data' => $response]);
    }

    public function processPaymentResponse(Request $request)
    {
        $response = $this->globalPaymentsService->processPaymentResponse($request->all());

        return new JsonResponse(['data' => $response]);
    }
}
