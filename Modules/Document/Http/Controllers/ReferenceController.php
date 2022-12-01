<?php

namespace Modules\Document\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Document\Services\Interfaces\ReferenceService;

class ReferenceController extends EntityController
{
    public function __construct(ReferenceService $service)
    {
        parent::__construct($service);
    }
}
