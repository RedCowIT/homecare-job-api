<?php

namespace Modules\Document\Services\Mock;

use Modules\Core\Services\MockEntityService;
use Modules\Document\Entities\Reference;
use Modules\Document\Entities\ReferenceSection;
use Modules\Document\Services\Interfaces\ReferenceSectionService;
use Modules\Document\Services\Interfaces\ReferenceService;

class MockReferenceSectionService extends MockEntityService implements ReferenceSectionService
{
    protected string $class = ReferenceSection::class;

    protected array $data = [
        [
            "id" => 1,
            "description" => 'reference section 1',
        ],
        [
            "id" => 2,
            "description" => 'reference section 2',
        ]
    ];
}
