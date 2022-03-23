<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceDocumentService;

class CustomerPlanFinanceDocumentController extends EntityController
{
    public function __construct(CustomerPlanFinanceDocumentService $service)
    {
        parent::__construct($service);
    }

    public function emailDocument(Request $request, $id)
    {
        $response = $this->entityService->emailDocument($id, $request->input('toAddress'));

        logger()->info('emailDocument', ['response' => $response]);

        return new JsonResponse();
    }
}
