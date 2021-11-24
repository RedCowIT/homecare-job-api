<?php

namespace Modules\Billing\Services\Mock\Quote;

use Modules\Billing\Entities\Quote\QuoteItem;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemService;
use Modules\Core\Services\MockEntityService;
use Modules\Core\Support\Entities;

class MockQuoteItemService extends MockEntityService implements QuoteItemService
{
    protected string $class = QuoteItem::class;

    protected array $data = [
        [
        ]
    ];

    function save($model)
    {
        $model = Entities::entity($model, $this->getClass());

        $model->setAttribute('id', random_int(1, 99999));
        $model->setAttribute('quote', 4.99);

        return $model;
    }
}
