<?php

namespace Modules\Core\Services;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Modules\Core\Entities\Entity;
use Modules\Core\Support\Entities;
use Illuminate\Support\Facades\Http;

abstract class WebEntityService implements EntityService
{
    function find($id)
    {
        $url = sprintf('%s/%s/%d', $this->getApiUrl(), $this->getUri(), $id);

        $response = $this->http()->get($url);

        logger()->debug(sprintf('WebEntityService.find(%d)', $id), [
            'response.status' => $response->status(),
            'response.body' => $response->body()
        ]);

        return $this->processResponse($response);
    }

    function query(array $params = [])
    {
        return $this->getData();
    }

    /**
     * Mimics a save by simply setting an id on the model
     *
     * @param array|Entity $model
     * @return array|mixed|Entity
     */
    function save($model)
    {
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

    protected function getUserId(){
        return 5;
    }

    protected function getAccessToken(): string{
        return env('WEB_API_ACCESS_TOKEN');
    }

    protected function getUri(): string {
        // default to class plural of class
        $className = $this->getClass();
        $cls = Str::afterLast($className, '\\');

        return Str::camel(Str::pluralStudly($cls));
    }

    protected function getApiUrl(): string
    {
        return rtrim(env('WEB_API_URL'), "/");
    }

    protected function processResponse(Response $response): array
    {
        if ($response->status() !== 200){

        }

        return json_decode($response->json(), true);
    }

    protected abstract function getClass();

}
