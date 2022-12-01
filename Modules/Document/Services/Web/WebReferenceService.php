<?php

namespace Modules\Document\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Document\Entities\Reference;
use Modules\Document\Services\Interfaces\ReferenceService;

class WebReferenceService extends WebEntityService implements ReferenceService
{
    protected string $class = Reference::class;
}
