<?php

namespace Modules\Document\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Document\Entities\ReferenceSection;
use Modules\Document\Services\Interfaces\ReferenceSectionService;

class WebReferenceSectionService extends WebEntityService implements ReferenceSectionService
{
    protected string $class = ReferenceSection::class;
}
