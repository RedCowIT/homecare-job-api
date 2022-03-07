<?php

namespace Modules\Plan\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Plan\Services\Interfaces\FinancePlanService;

class WebFinancePlanService extends WebEntityService implements FinancePlanService
{
    function calculate($model)
    {
        $url = sprintf('%s/calculateFinancePlan', $this->getApiUrl());

        logger()->debug('API CALCULATE', ['model' => $model, 'url' => $url]);

        $response = $this->http()->post($url, $model);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }
}
