<?php

namespace Modules\Document\Services\Mock;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Modules\Core\Services\MockEntityService;
use Modules\Document\Entities\Document;
use Modules\Document\Services\Interfaces\DocumentService;

class MockDocumentService extends MockEntityService implements DocumentService
{
    protected string $class = Document::class;

    protected array $data = [
        [
            "id" => 1,
            "parentId" => 1,
            "subId" => 1,
            "documentTypeId" => 6,
            "documentSubTypeId" => 1,
            'url' => 'https://via.placeholder.com/800x400?text=Landscape+Photo'
        ],
        [
            "id" => 2,
            "parentId" => 1,
            "subId" => 1,
            "documentTypeId" => 6,
            "documentSubTypeId" => 1,
            'url' => 'https://via.placeholder.com/400x800?text=Portrait+Photo'
        ],
        [
            "id" => 3,
            "parentId" => 1,
            "subId" => 1,
            "documentTypeId" => 6,
            "documentSubTypeId" => 2,
            'url' => 'https://via.placeholder.com/800x400?text=Landscape+Photo'
        ]
    ];

    function save($model)
    {
        $file = $this->getFile($model);

        $model = Arr::except($model, 'file');

        logger()->debug('MockDocumentService.save', ['model' => $model, 'file' => $file, 'filename' => $file->get()]);

        return $model;
    }

    function getFile($request): ?UploadedFile
    {
        $files = Arr::get($request, 'file');
        if (!empty($files)) {
            return $files[0];
        }
        return null;
    }
}
