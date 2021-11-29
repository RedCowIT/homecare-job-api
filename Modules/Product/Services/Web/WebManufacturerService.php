<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\Manufacturer;
use Modules\Product\Services\Interfaces\ManufacturerService;

class WebManufacturerService extends WebEntityService implements ManufacturerService
{
    protected string $class = Manufacturer::class;
}
