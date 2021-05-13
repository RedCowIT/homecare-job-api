<?php

namespace Modules\Core\Services;

use Modules\Core\Entities\Entity;

/**
 * Interface EntityService
 *
 * Repository pattern.
 *
 * @package Modules\Core\Services
 */
interface EntityService
{
    /**
     * Find single entity with unique id.
     *
     * @param int|string $id
     * @return mixed
     */
    function find($id);

    /**
     * Query entities
     *
     * @param array $params
     * @return mixed
     */
    function query(array $params = []);

    /**
     * Create new entity
     *
     * @param Entity|array $model
     * @return mixed
     */
    function save($model);

    /**
     * Update entity
     *
     * @param int|string $id
     * @param Entity|array $model
     * @return mixed
     */
    function update($id, $model);

    /**
     * Delete entity
     *
     * @param int|string $id
     * @return mixed
     */
    function delete($id);
}
