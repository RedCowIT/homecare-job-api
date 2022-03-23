<?php

namespace Modules\Customer\Services\Interfaces;

use Modules\Core\Services\EntityService;

interface CustomerPlanFinanceDocumentService extends EntityService {

    function emailDocument($id, $toAddress);

}
