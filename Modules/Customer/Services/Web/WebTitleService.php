<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\Title;
use Modules\Customer\Services\Interfaces\TitleService;

class WebTitleService extends WebEntityService implements TitleService
{
    protected string $class = Title::class;
}
