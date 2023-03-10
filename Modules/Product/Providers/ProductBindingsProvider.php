<?php

namespace Modules\Product\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Product\Services\Interfaces\ApplianceFuelTypeService;
use Modules\Product\Services\Interfaces\ApplianceInstallTypeService;
use Modules\Product\Services\Interfaces\ApplianceModelService;
use Modules\Product\Services\Interfaces\AppliancePriceRangeService;
use Modules\Product\Services\Interfaces\ApplianceTumbleDryerTypeService;
use Modules\Product\Services\Interfaces\ApplianceTypeService;
use Modules\Product\Services\Interfaces\BrandService;
use Modules\Product\Services\Interfaces\CommercialProductService;
use Modules\Product\Services\Interfaces\ManufacturerService;
use Modules\Product\Services\Interfaces\ProductCategoryService;
use Modules\Product\Services\Interfaces\ProductService;
use Modules\Product\Services\Interfaces\ProductStockService;
use Modules\Product\Services\Mock\MockApplianceFuelTypeService;
use Modules\Product\Services\Mock\MockApplianceInstallTypeService;
use Modules\Product\Services\Mock\MockApplianceModelService;
use Modules\Product\Services\Mock\MockAppliancePriceRangeService;
use Modules\Product\Services\Mock\MockApplianceTumbleDryerTypeService;
use Modules\Product\Services\Mock\MockApplianceTypeService;
use Modules\Product\Services\Mock\MockBrandService;
use Modules\Product\Services\Mock\MockCommercialProductService;
use Modules\Product\Services\Mock\MockManufacturerService;
use Modules\Product\Services\Mock\MockProductCategoryService;
use Modules\Product\Services\Mock\MockProductService;
use Modules\Product\Services\Mock\MockProductStockService;
use Modules\Product\Services\Web\WebApplianceFuelTypeService;
use Modules\Product\Services\Web\WebApplianceInstallTypeService;
use Modules\Product\Services\Web\WebApplianceModelService;
use Modules\Product\Services\Web\WebAppliancePriceRangeService;
use Modules\Product\Services\Web\WebApplianceTumbleDryerTypeService;
use Modules\Product\Services\Web\WebApplianceTypeService;
use Modules\Product\Services\Web\WebBrandService;
use Modules\Product\Services\Web\WebCommercialProductService;
use Modules\Product\Services\Web\WebManufacturerService;
use Modules\Product\Services\Web\WebProductCategoryService;
use Modules\Product\Services\Web\WebProductService;
use Modules\Product\Services\Web\WebProductStockService;

class ProductBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            ApplianceModelService::class => [
                'mock' => MockApplianceModelService::class,
                'api' => WebApplianceModelService::class
            ],
            AppliancePriceRangeService::class => [
                'mock' => MockAppliancePriceRangeService::class,
                'api' => WebAppliancePriceRangeService::class
            ],
            ApplianceTypeService::class => [
                'mock' => MockApplianceTypeService::class,
                'api' => WebApplianceTypeService::class
            ],
            ApplianceFuelTypeService::class => [
                'mock' => MockApplianceFuelTypeService::class,
                'api' => WebApplianceFuelTypeService::class
            ],
            ApplianceInstallTypeService::class => [
                'mock' => MockApplianceInstallTypeService::class,
                'api' => WebApplianceInstallTypeService::class
            ],
            ApplianceTumbleDryerTypeService::class => [
                'mock' => MockApplianceTumbleDryerTypeService::class,
                'api' => WebApplianceTumbleDryerTypeService::class
            ],
            BrandService::class => [
                'mock' => MockBrandService::class,
                'api' => WebBrandService::class
            ],
            ManufacturerService::class => [
                'mock' => MockManufacturerService::class,
                'api' => WebManufacturerService::class
            ],
            ProductService::class => [
                'mock' => MockProductService::class,
                'api' => WebProductService::class
            ],
            ProductCategoryService::class => [
                'mock' => MockProductCategoryService::class,
                'api' => WebProductCategoryService::class
            ],
            ProductStockService::class => [
                'mock' => MockProductStockService::class,
                'api' => WebProductStockService::class
            ],
            CommercialProductService::class => [
                'mock' => MockCommercialProductService::class,
                'api' => WebCommercialProductService::class
            ]
        ];
    }
}
