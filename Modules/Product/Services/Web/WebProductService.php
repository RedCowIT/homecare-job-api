<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\Product;
use Modules\Product\Services\Interfaces\ProductService;

class WebProductService extends WebEntityService implements ProductService
{
    protected string $class = Product::class;
}
