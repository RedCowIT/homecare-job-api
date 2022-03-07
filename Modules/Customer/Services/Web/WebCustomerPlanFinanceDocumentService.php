<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerPlanFinanceDocument;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceDocumentService;

class WebCustomerPlanFinanceDocumentService extends WebEntityService implements CustomerPlanFinanceDocumentService
{
    protected string $class = CustomerPlanFinanceDocument::class;
}
