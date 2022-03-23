<?php

namespace Modules\Billing\Services\Web\Payment;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Modules\Billing\Services\Interfaces\Payment\GlobalPaymentService;
use Modules\Core\Support\HandlesHttpResponses;

class WebGlobalPaymentService implements GlobalPaymentService
{
    use HandlesHttpResponses;

    public function __construct()
    {
    }

    function createPaymentCharge(array $data){

        logger()->debug('API Create Global Payment Charge', $data);

        $url = sprintf('%s/createGlobalPaymentCharge', $this->getApiUrl());

        $response = $this->http()->post($url, $data);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    function processPaymentResponse(array $data)
    {
        logger()->debug('API Process Global Payment Charge', $data);

        $url = sprintf('%s/processGlobalPaymentResponse', $this->getApiUrl());

        $response = $this->http()->post($url, $data);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    protected function getApiUrl(): string
    {
        return rtrim(env('WEB_API_URL'), "/");
    }

    protected function http(): \Illuminate\Http\Client\PendingRequest
    {
        return Http::withHeaders([
            'UserId' => $this->getUserId(),
            'AccessToken' => $this->getAccessToken()
        ])->timeout(env('WEB_API_TIMEOUT', 10));
    }

    protected function getUserId()
    {
        $user = Auth::user();

        return $user['id'];
    }

    protected function getAccessToken(): string
    {
        return env('WEB_API_ACCESS_TOKEN');
    }
}
