<?php

namespace Modules\Core\Support;

use Modules\Core\Entities\Entity;

class Entities
{
    /**
     * @param Entity|array $entity
     * @param $class
     * @return Entity
     */
    static function entity($entity, $class): Entity
    {
        Assert::true($entity != null);
        Assert::true($class != null);

        if (is_array($entity)) {
            return new $class($entity);
        }

        Assert::true($entity instanceof $class, 'Entity is not an instance of class: ' . $class);

        return $entity;
    }
}
