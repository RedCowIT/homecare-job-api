<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ProductCategoryService;

class ProductCategoryController extends EntityController
{
    public function __construct(ProductCategoryService $service)
    {
        parent::__construct($service);
    }
}
