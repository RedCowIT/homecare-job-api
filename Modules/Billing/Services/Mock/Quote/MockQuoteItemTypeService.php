<?php

namespace Modules\Billing\Services\Mock\Quote;

use Modules\Billing\Entities\Quote\QuoteItemType;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemTypeService;
use Modules\Core\Services\MockEntityService;

class MockQuoteItemTypeService extends MockEntityService implements QuoteItemTypeService
{
    protected string $class = QuoteItemType::class;

    protected array $data = [
        [
            'id' => 1,
            'description' => 'Appliance'
        ],
        [
            'id' => 2,
            'description' => 'Plan'
        ],
        [
            'id' => 3,
            'description' => 'Product'
        ]
    ];
}
