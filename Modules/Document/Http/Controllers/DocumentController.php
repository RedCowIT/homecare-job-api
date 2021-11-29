<?php

namespace Modules\Document\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Document\Services\Interfaces\DocumentService;

class DocumentController extends EntityController
{
    public function __construct(DocumentService $service)
    {
        parent::__construct($service);
    }
}
