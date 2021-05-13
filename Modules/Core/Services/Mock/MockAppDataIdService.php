<?php

namespace Modules\Core\Services\Mock;

use Modules\Core\Entities\AppDataId;
use Modules\Core\Services\Interfaces\AppDataIdService;
use Modules\Core\Services\MockEntityService;

class MockAppDataIdService extends MockEntityService implements AppDataIdService
{
    protected string $class = AppDataId::class;
    protected bool $returnFirst = true;

    protected array $data = [
    ];

    function getData(): array
    {
        return [
            [
                'id' => random_int(1, PHP_INT_MAX)
            ]
        ];
    }

}
