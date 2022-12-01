<?php

namespace Modules\Document\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Document\Services\Interfaces\ReferenceSectionService;

class ReferenceSectionController extends EntityController
{
    public function __construct(ReferenceSectionService $service)
    {
        parent::__construct($service);
    }
}
