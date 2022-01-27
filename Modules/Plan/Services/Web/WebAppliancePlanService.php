<?php

namespace Modules\Plan\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Plan\Services\Interfaces\AppliancePlanService;

class WebAppliancePlanService extends WebEntityService implements AppliancePlanService
{
    function calculate($model)
    {
        $url = sprintf('%s/calculateAppliancePlanPrice', $this->getApiUrl());

        logger()->debug('API CALCULATE', ['model' => $model, 'url' => $url]);

        $response = $this->http()->post($url, $model);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }
}
