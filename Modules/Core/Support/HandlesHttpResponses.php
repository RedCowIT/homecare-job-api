<?php

namespace Modules\Core\Support;

use Psr\Http\Message\ResponseInterface;

trait HandlesHttpResponses {

    protected function processResponse($response)
    {
        if ($this->getResponseStatus($response) !== 200) {
            $this->handleErrorResponse($response);
            return null;
        }

        $body = json_decode($this->getResponseBody($response), true);;

        if (intval($body)) {
            return $body;
        }

        return json_decode($body, true);
    }

    protected function handleErrorResponse($response)
    {
        logger()->warning($this->getResponseBody($response));

        switch ($this->getResponseStatus($response)) {
            case 200:

                break;
        }

        abort($this->getResponseStatus($response), $this->getResponseBody($response));
    }

    protected function logResponse(string $url, $response)
    {
        logger()->debug($url, [
            'response.status' => $this->getResponseStatus($response),
            'response.body' => $this->getResponseBody($response)
        ]);
    }

    protected function getResponseStatus($response): int
    {
        if ($response instanceof ResponseInterface) {
            return $response->getStatusCode();
        }

        return $response->getStatusCode();
    }

    protected function getResponseBody($response): string
    {
        if ($response instanceof ResponseInterface) {
            return $response->getBody();
        }

        return $response->body();
    }

}
