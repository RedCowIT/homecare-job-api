<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceDocumentService;

class CustomerPlanFinanceDocumentController extends EntityController
{
    public function __construct(CustomerPlanFinanceDocumentService $service)
    {
        parent::__construct($service);
    }
}
