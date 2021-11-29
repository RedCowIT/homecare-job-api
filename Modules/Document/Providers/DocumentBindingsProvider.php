<?php

namespace Modules\Document\Providers;

use Modules\Core\Providers\BindingsServiceProvider;
use Modules\Document\Entities\DocumentSubType;
use Modules\Document\Entities\DocumentType;
use Modules\Document\Services\Interfaces\DocumentService;
use Modules\Document\Services\Interfaces\DocumentSubTypeService;
use Modules\Document\Services\Interfaces\DocumentTypeService;
use Modules\Document\Services\Mock\MockDocumentService;
use Modules\Document\Services\Mock\MockDocumentSubTypeService;
use Modules\Document\Services\Mock\MockDocumentTypeService;
use Modules\Document\Services\Web\WebDocumentService;
use Modules\Document\Services\Web\WebDocumentSubTypeService;
use Modules\Document\Services\Web\WebDocumentTypeService;

class DocumentBindingsProvider extends BindingsServiceProvider
{
    protected function getServices()
    {
        return [
            DocumentService::class => [
                'mock' => MockDocumentService::class,
                'api' => WebDocumentService::class
            ],
            DocumentTypeService::class => [
                'mock' => MockDocumentTypeService::class,
                'api' => WebDocumentTypeService::class
            ],
            DocumentSubTypeService::class => [
                'mock' => MockDocumentSubTypeService::class,
                'api' => WebDocumentSubTypeService::class
            ],
        ];
    }
}
