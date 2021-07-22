<?php

namespace Modules\Product\Http\Controllers;

use Modules\Core\Http\Controllers\EntityController;
use Modules\Product\Services\Interfaces\ProductService;

class ProductController extends EntityController
{
    public function __construct(ProductService $service)
    {
        parent::__construct($service);
    }
}
