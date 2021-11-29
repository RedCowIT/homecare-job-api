<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\ProductCategory;
use Modules\Product\Services\Interfaces\ProductCategoryService;

class WebProductCategoryService extends WebEntityService implements ProductCategoryService
{
    protected string $class = ProductCategory::class;
}
