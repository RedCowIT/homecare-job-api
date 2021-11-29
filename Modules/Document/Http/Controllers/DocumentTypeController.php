<?php

namespace Modules\Document\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Document\Services\Interfaces\DocumentTypeService;

class DocumentTypeController extends EntityController
{
    public function __construct(DocumentTypeService $service)
    {
        parent::__construct($service);
    }
}
