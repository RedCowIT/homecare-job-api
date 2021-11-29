<?php

namespace Modules\Document\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Document\Entities\DocumentType;
use Modules\Document\Services\Interfaces\DocumentTypeService;

class WebDocumentTypeService extends WebEntityService implements DocumentTypeService
{
    protected string $class = DocumentType::class;
}
