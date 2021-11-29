<?php

namespace Modules\Document\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Document\Entities\Document;
use Modules\Document\Services\Interfaces\DocumentService;

class WebDocumentService extends WebEntityService implements DocumentService
{
    protected string $class = Document::class;
}
