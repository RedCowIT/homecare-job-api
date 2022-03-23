<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\CustomerPlanFinanceDocument;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceDocumentService;

class MockCustomerPlanFinanceDocumentService extends MockEntityService implements CustomerPlanFinanceDocumentService
{
    protected string $class = CustomerPlanFinanceDocument::class;

    protected array $data = [
    ];

    function emailDocument($id, $toAddress){
        return [];
    }
}
