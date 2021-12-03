<?php

namespace Modules\Core\Providers;

use Modules\Core\Services\Interfaces\AppDataIdService;
use Modules\Core\Services\Interfaces\PolicyService;
use Modules\Core\Services\Mock\MockAppDataIdService;
use Modules\Core\Services\Mock\MockPolicyService;
use Modules\Core\Services\Web\WebAppDataIdService;
use Modules\Core\Services\Web\WebPolicyService;

class CoreBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            AppDataIdService::class => [
                'mock' => MockAppDataIdService::class,
                'api' => WebAppDataIdService::class
            ],
            PolicyService::class => [
                'mock' => MockPolicyService::class,
                'api' => WebPolicyService::class
            ]
        ];
    }
}
