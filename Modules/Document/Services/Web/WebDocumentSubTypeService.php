<?php

namespace Modules\Document\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Document\Entities\DocumentSubType;
use Modules\Document\Services\Interfaces\DocumentSubTypeService;

class WebDocumentSubTypeService extends WebEntityService implements DocumentSubTypeService
{
    protected string $class = DocumentSubType::class;
}
