<?php

namespace Modules\Customer\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Customer\Services\Interfaces\TitleService;

class TitleController extends EntityController
{
    public function __construct(TitleService $service)
    {
        parent::__construct($service);
    }
}
