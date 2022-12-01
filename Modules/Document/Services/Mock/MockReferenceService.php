<?php

namespace Modules\Document\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Document\Entities\Reference;
use Modules\Document\Services\Interfaces\ReferenceService;

class MockReferenceService extends MockEntityService implements ReferenceService
{
    protected string $class = Reference::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'file 1',
            'url' => 'https://via.placeholder.com/800x400?text=Landscape+Photo',
            'referenceSectionId' => 1
        ],
        [
            "id" => 2,
            "description" => 'file 2',
            'url' => 'https://via.placeholder.com/400x800?text=Portrait+Photo',
            'referenceSectionId' => 2
        ]
    ];
}
