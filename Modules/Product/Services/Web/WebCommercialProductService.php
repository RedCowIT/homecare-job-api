<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\CommercialProduct;
use Modules\Product\Services\Interfaces\CommercialProductService;

class WebCommercialProductService extends WebEntityService implements CommercialProductService
{
    protected string $class = CommercialProduct::class;
}
