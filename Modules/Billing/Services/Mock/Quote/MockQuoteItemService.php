<?php

namespace Modules\Billing\Services\Mock\Quote;

use Modules\Billing\Entities\Quote\QuoteItem;
use Modules\Billing\Services\Interfaces\Quote\QuoteItemService;
use Modules\Core\Services\MockEntityService;

class MockQuoteItemService extends MockEntityService implements QuoteItemService
{
    protected string $class = QuoteItem::class;

    protected array $data = [
        [
        ]
    ];

    /**
     *
     *
     * @param array $params
     * @return array|mixed
     */
//    function query(array $params = [])
//    {
//        if (count($params) === 0){
//            return parent::query($params);
//        }
//
//        return $this->getData();
//    }
}
