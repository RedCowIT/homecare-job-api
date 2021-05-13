<?php

namespace Modules\Core\Providers;

use Modules\Core\Services\Interfaces\AppDataIdService;
use Modules\Core\Services\Mock\MockAppDataIdService;

class CoreBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            AppDataIdService::class => [
                'mock' => MockAppDataIdService::class,
                'api' => null
            ]
        ];
    }
}
