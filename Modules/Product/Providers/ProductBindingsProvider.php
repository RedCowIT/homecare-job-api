<?php

namespace Modules\Product\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Product\Services\Interfaces\ApplianceModelService;
use Modules\Product\Services\Interfaces\AppliancePriceRangeService;
use Modules\Product\Services\Interfaces\ApplianceTypeService;
use Modules\Product\Services\Interfaces\BrandService;
use Modules\Product\Services\Interfaces\CommercialProductService;
use Modules\Product\Services\Interfaces\ManufacturerService;
use Modules\Product\Services\Interfaces\ProductCategoryService;
use Modules\Product\Services\Interfaces\ProductService;
use Modules\Product\Services\Mock\MockApplianceModelService;
use Modules\Product\Services\Mock\MockAppliancePriceRangeService;
use Modules\Product\Services\Mock\MockApplianceTypeService;
use Modules\Product\Services\Mock\MockBrandService;
use Modules\Product\Services\Mock\MockCommercialProductService;
use Modules\Product\Services\Mock\MockManufacturerService;
use Modules\Product\Services\Mock\MockProductCategoryService;
use Modules\Product\Services\Mock\MockProductService;

class ProductBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            ApplianceModelService::class => [
                'mock' => MockApplianceModelService::class,
                'api' => null
            ],
            AppliancePriceRangeService::class => [
                'mock' => MockAppliancePriceRangeService::class,
                'api' => null
            ],
            ApplianceTypeService::class => [
                'mock' => MockApplianceTypeService::class,
                'api' => null
            ],
            BrandService::class => [
                'mock' => MockBrandService::class,
                'api' => null
            ],
            ManufacturerService::class => [
                'mock' => MockManufacturerService::class,
                'api' => null
            ],
            ProductService::class => [
                'mock' => MockProductService::class,
                'api' => null
            ],
            ProductCategoryService::class => [
                'mock' => MockProductCategoryService::class,
                'api' => null
            ],
            CommercialProductService::class => [
                'mock' => MockCommercialProductService::class,
                'api' => null
            ]
        ];
    }
}
