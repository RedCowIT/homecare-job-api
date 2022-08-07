<?php

namespace Modules\Billing\Services\Web\Invoice;

use Illuminate\Support\Arr;
use Modules\Billing\Entities\Invoice\Invoice;
use Modules\Billing\Services\Interfaces\Invoice\InvoiceService;
use Modules\Core\Services\WebEntityService;

class WebInvoiceService extends WebEntityService implements InvoiceService
{
    protected string $class = Invoice::class;

    function query(array $params = [])
    {
        $invoices = parent::query($params);

        if (!Arr::has($params, 'appointmentId')){
            return $invoices;
        }

        $r = [];
        foreach ($invoices as $invoice) {
            $r[] = array_merge($invoice,
                [
                    'appointmentId' => intval(Arr::get($params, 'appointmentId'))
                ]);
        }

        return $r;
    }

    function save($model)
    {
        $url = sprintf('%s/invoices?appointmentId=%d', $this->getApiUrl(), $model['appointmentId']);

        logger()->debug('API SAVE', ['model' => $model, 'url' => $url]);

        $response = $this->http()->post($url, []);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    function emailInvoice($invoiceId, $toAddress){
        $url = sprintf('%s/invoices/%d/sendEmail', $this->getApiUrl(), $invoiceId);

        logger()->debug('API SEND EMAIL', ['invoiceId' => $invoiceId]);

        $response = $this->http()->post($url, ['toAddress' => $toAddress]);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    function postInvoice($invoiceId){
        $url = sprintf('%s/invoices/%d/sendPost', $this->getApiUrl(), $invoiceId);

        logger()->debug('API SEND POST', ['invoiceId' => $invoiceId]);

        $response = $this->http()->post($url);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }
}
