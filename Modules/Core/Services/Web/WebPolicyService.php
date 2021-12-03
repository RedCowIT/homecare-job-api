<?php

namespace Modules\Core\Services\Web;

use Modules\Core\Entities\Policy;
use Modules\Core\Services\Interfaces\PolicyService;;

use Modules\Core\Services\WebEntityService;

class WebPolicyService extends WebEntityService implements PolicyService
{
    protected string $class = Policy::class;
}
