<?php

namespace Modules\Document\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Document\Services\Interfaces\DocumentSubTypeService;

class DocumentSubTypeController extends EntityController
{
    public function __construct(DocumentSubTypeService $service)
    {
        parent::__construct($service);
    }
}
