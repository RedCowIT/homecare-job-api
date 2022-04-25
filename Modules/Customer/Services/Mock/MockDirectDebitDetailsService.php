<?php

namespace Modules\Customer\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Customer\Entities\DirectDebitDetails;
use Modules\Customer\Services\Interfaces\DirectDebitDetailsService;

class MockDirectDebitDetailsService extends MockEntityService implements DirectDebitDetailsService
{
    protected string $class = DirectDebitDetails::class;

    protected array $data = [
    ];
}
