<?php

namespace Modules\Core\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Modules\Core\Entities\Entity;
use Modules\Core\Support\Entities;
use Psr\Http\Message\ResponseInterface;

abstract class WebEntityService implements EntityService
{
    protected string $class;

    function find($id)
    {
        logger()->debug('API FIND', ['id' => $id]);

        $url = sprintf('%s/%s/%d', $this->getApiUrl(), $this->getUri(), $id);

        $response = $this->http()->get($url);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    function query(array $params = [])
    {
        logger()->debug('API GET', ['params' => $params]);

        $url = sprintf('%s/%s', $this->getApiUrl(), $this->getUri());

        $response = $this->http()->get($url, $params);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    /**
     * Mimics a save by simply setting an id on the model
     *
     * @param array|Entity $model
     * @return array|mixed|Entity
     */
    function save($model)
    {
        logger()->debug('API SAVE...', ['model' => $model]);

        $url = sprintf('%s/%s', $this->getApiUrl(), $this->getUri());

        $response = $this->http()->post($url, $model);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    function update($id, $model)
    {
        logger()->debug('API UPDATE...', ['model' => $model]);

        $url = sprintf('%s/%s/%d', $this->getApiUrl(), $this->getUri(), $model['id']);

        $response = $this->http()->put($url, $model);

        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }

    function delete($id)
    {
        return $id;
    }

    function getData(): array
    {
        return $this->data;
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

    protected function getUri(): string
    {
        // default to class plural of class
        $className = $this->getClass();
        $cls = Str::afterLast($className, '\\');

        return Str::camel(Str::pluralStudly($cls));
    }

    protected function getApiUrl(): string
    {
        return rtrim(env('WEB_API_URL'), "/");
    }

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

    protected function getClass(): string
    {
        return $this->class;
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
