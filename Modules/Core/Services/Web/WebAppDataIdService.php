<?php

namespace Modules\Core\Services\Web;

use Illuminate\Support\Str;
use Modules\Core\Entities\AppDataId;
use Modules\Core\Services\Interfaces\AppDataIdService;
use Modules\Core\Services\WebEntityService;

;

class WebAppDataIdService extends WebEntityService implements AppDataIdService
{
    protected string $class = AppDataId::class;

    protected function getUri(): string
    {
        return 'appDataId';
    }
}
