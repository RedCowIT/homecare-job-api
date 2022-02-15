<?php

namespace Modules\Document\Services\Web;

use Modules\Core\Services\WebEntityService;
use Modules\Document\Entities\Document;
use Modules\Document\Services\Interfaces\DocumentService;

class WebDocumentService extends WebEntityService implements DocumentService
{
    protected string $class = Document::class;

    function save($model)
    {
        logger()->debug('API SAVE....', ['model' => $model]);

        $url = sprintf('%s/%s', $this->getApiUrl(), $this->getUri());

        $file = $model['file'][0];
        $data = [
            [
                'name' => 'file',
                'contents' => $file->getContent(),
                'filename' => $file->getClientOriginalName()
            ]
        ];

        $fields = ['parentId', 'subId', 'documentTypeId', 'documentSubTypeId'];

        foreach ($fields as $field) {
            $data[] = ['name' => $field, 'contents' => $model[$field]];
        }

        $client = new \GuzzleHttp\Client();

        $response = $client->post($url, [
            'headers' => [
                'UserId' => $this->getUserId(),
                'AccessToken' => $this->getAccessToken()
            ],
            'multipart' => $data
        ]);


        $this->logResponse($url, $response);

        return $this->processResponse($response);
    }
}
