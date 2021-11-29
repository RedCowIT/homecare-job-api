<?php

namespace Modules\Document\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Document\Entities\Document;
use Modules\Document\Services\Interfaces\DocumentService;

class MockDocumentService extends MockEntityService implements DocumentService
{
    protected string $class = Document::class;

    protected array $data = [
        [

        ]
    ];
}
