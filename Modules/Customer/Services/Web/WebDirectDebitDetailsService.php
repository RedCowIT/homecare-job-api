<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\DirectDebitDetails;
use Modules\Customer\Services\Interfaces\DirectDebitDetailsService;

class WebDirectDebitDetailsService extends WebEntityService implements DirectDebitDetailsService
{
    protected string $class = DirectDebitDetails::class;
}
