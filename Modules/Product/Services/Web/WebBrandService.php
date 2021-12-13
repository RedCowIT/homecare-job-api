<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\Brand;
use Modules\Product\Services\Interfaces\BrandService;

class WebBrandService extends WebEntityService implements BrandService
{
    protected string $class = Brand::class;

    protected function getUri(): string
    {
        return 'applianceBrands';
    }
}
