<?php

namespace Modules\Core\Services\Mock;

use Modules\Core\Entities\AppDataId;
use Modules\Core\Services\Interfaces\AppDataIdService;
use Modules\Core\Services\Interfaces\PolicyService;
use Modules\Core\Services\MockEntityService;

class MockPolicyService extends MockEntityService implements PolicyService
{
    protected string $class = AppDataId::class;
    protected bool $returnFirst = true;

    const body = '<p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla vitae elit libero, a pharetra augue.</p><p>Nullam id dolor id nibh ultricies vehicula ut id elit. Sed posuere consectetur est at lobortis. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p><p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Nulla vitae elit libero, a pharetra augue.</p>';

    protected array $data = [
    ];

    function getData(): array
    {
        return [
            $this->createPolicy('Vulnerable Persons Policy', 2),
            $this->createPolicy('Notice of Right to Cancel', 1),
            $this->createPolicy('Important Information', 3),
            $this->createPolicy('Upholstery and Carpet Cleaning Disclaimer', 4),
            $this->createPolicy('Terms and Conditions', 5),
            $this->createPolicy('Privacy Statement', 6)
        ];
    }

    function createPolicy($title, $order)
    {
        return [
            'id' => random_int(1, 2000),
            'title' => $title,
            'body' => self::body,
            'order' => $order
        ];
    }
}
