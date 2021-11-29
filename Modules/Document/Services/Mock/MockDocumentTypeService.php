<?php

namespace Modules\Document\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Document\Entities\DocumentType;
use Modules\Document\Services\Interfaces\DocumentTypeService;

class MockDocumentTypeService extends MockEntityService implements DocumentTypeService
{
    protected string $class = DocumentType::class;

    protected array $data = [
        [
            'id' => 1,
            'description' => 'Staff'
        ],
        [
            'id' => 2,
            'description' => 'Vehicle'
        ],
        [
            'id' => 3,
            'description' => 'Supplier'
        ],
        [
            'id' => 4,
            'description' => 'Standard'
        ],
        [
            'id' => 5,
            'description' => 'Customer'
        ],
        [
            'id' => 6,
            'description' => 'CustomerPhoto'
        ]
    ];
}
