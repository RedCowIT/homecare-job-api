<?php

namespace Modules\Billing\Services\Web\Quote;

use Illuminate\Support\Arr;
use Modules\Billing\Entities\Quote\QuotePlanDetail;
use Modules\Billing\Services\Interfaces\Quote\QuotePlanDetailService;
use Modules\Core\Entities\Entity;
use Modules\Core\Services\WebEntityService;

class WebQuotePlanDetailService extends WebEntityService implements QuotePlanDetailService
{
    protected string $class = QuotePlanDetail::class;

    function save($model)
    {
        return parent::save(Arr::except($model, ['planTypeId', 'id']));
    }

    function update($id, $model)
    {
        return parent::update($id, Arr::except($model, ['planTypeId']));
    }
}
