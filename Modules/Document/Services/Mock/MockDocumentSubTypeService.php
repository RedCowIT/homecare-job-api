<?php

namespace Modules\Document\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Document\Entities\DocumentSubType;
use Modules\Document\Services\Interfaces\DocumentSubTypeService;

class MockDocumentSubTypeService extends MockEntityService implements DocumentSubTypeService
{
    protected string $class = DocumentSubType::class;

    protected array $data = [
        [
            'id' => 1,
            'documentTypeId' => 6,
            'description' => 'Before Pic'
        ],
        [
            'id' => 2,
            'documentTypeId' => 6,
            'description' => 'After Pic'
        ]
    ];
}
