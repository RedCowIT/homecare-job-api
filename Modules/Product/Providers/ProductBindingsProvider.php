<?php

namespace Modules\Product\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Product\Services\Interfaces\ApplianceTypeService;
use Modules\Product\Services\Mock\MockApplianceTypeService;

class ProductBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            ApplianceTypeService::class => [
                'mock' => MockApplianceTypeService::class,
                'api' => null
            ],
        ];
    }
}
