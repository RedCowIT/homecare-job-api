<?php

namespace Modules\Customer\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Customer\Entities\CustomerPlanFinanceDocument;
use Modules\Customer\Services\Interfaces\CustomerPlanFinanceDocumentService;

class WebCustomerPlanFinanceDocumentService extends WebEntityService implements CustomerPlanFinanceDocumentService
{
    protected string $class = CustomerPlanFinanceDocument::class;

    function emailDocument($id, $toAddress){
        $url = sprintf('%s/customerPlanFinanceDocuments/%d/sendEmail', $this->getApiUrl(), $id);

        logger()->debug('API SEND EMAIL', ['financeDocId' => $id]);

        $response = $this->http()->post($url, ['toAddress' => $toAddress]);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }
}
