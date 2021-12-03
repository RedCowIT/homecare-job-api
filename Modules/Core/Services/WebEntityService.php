<?php

namespace Modules\Core\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Modules\Core\Entities\Entity;
use Modules\Core\Support\Entities;

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
        logger()->debug('API SAVE', ['model' => $model]);

        $model = Entities::entity($model, $this->getClass());

        $model->setAttribute('id', 999);

        return $model;
    }

    function update($id, $model)
    {
        return Entities::entity($model, $this->getClass());
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

    protected function processResponse(Response $response)
    {
        if ($response->status() !== 200) {
            return $this->handleErrorResponse($response);
        }

        $body = $response->json();

        if (intval($body)){
            return $body;
        }

        return json_decode($body, true);
    }

    protected function getClass(): string
    {
        return $this->class;
    }

    protected function handleErrorResponse(Response $response)
    {
        switch ($response->status()){
            case 200:

                break;
        }

        return null;
    }

    protected function logResponse(string $url, \Illuminate\Http\Client\Response $response)
    {
        logger()->debug($url, [
            'response.status' => $response->status(),
            'response.body' => $response->body()
        ]);
    }
}
