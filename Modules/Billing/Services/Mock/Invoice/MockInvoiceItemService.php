<?php

namespace Modules\Billing\Services\Mock\Invoice;

use Modules\Billing\Entities\Invoice\InvoiceItem;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceItemService;
use Modules\Core\Services\MockEntityService;
use Modules\Core\Support\Entities;

class MockInvoiceItemService extends MockEntityService implements InvoiceItemService
{
    protected string $class = InvoiceItem::class;

    protected array $data = [];

    function save($model)
    {
        $model = parent::save($model);

        $model->setAttribute('productCode', 'code-' . $model->id);
        $model->setAttribute('description', 'description-' . $model->id);

        if ($model->unitPrice){
            $model->setAttribute('linenett', $model->unitPrice * $model->qty * 1);
            $model->setAttribute('linevat', $model->unitPrice * $model->qty * 0.2);
            $model->setAttribute('linegross', $model->linenett + $model->linevat);
        }

        return $model;
    }
}
