<?php

namespace Modules\Product\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Product\Entities\ApplianceModel;
use Modules\Product\Services\Interfaces\ApplianceModelService;

class WebApplianceModelService extends WebEntityService implements ApplianceModelService
{
    protected string $class = ApplianceModel::class;
}
