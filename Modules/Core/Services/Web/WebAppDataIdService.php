<?php

namespace Modules\Core\Services\Web;

use Modules\Core\Entities\AppDataId;
use Modules\Core\Services\Interfaces\AppDataIdService;
use Modules\Core\Services\WebEntityService;

class WebAppDataIdService extends WebEntityService implements AppDataIdService
{
    protected string $class = AppDataId::class;

    protected function getUri(): string
    {
        return 'appDataId';
    }

    /**
     * Wrap single id in expected array of objects format.
     *
     * @param array $params
     * @return array
     */
    function query(array $params = [])
    {
        $id = parent::query($params);

        return [
            [
                'id' => $id
            ]
        ];
    }
}
