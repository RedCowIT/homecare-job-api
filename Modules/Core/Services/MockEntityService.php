<?php

namespace Modules\Core\Services;

use Illuminate\Support\Arr;
use Modules\Core\Entities\Entity;
use Modules\Core\Support\Entities;

abstract class MockEntityService implements EntityService
{
    protected array $data = [];
    protected string $class;
    protected bool $returnFirst = false; // set to true to always "find" first data element

    function find($id)
    {
        $attributes = $this->findAttributes($id);

        if (!$attributes){
            return null;
        }

        $class = $this->getClass();

        return new $class($attributes);
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

    protected function getClass(): string {
        return $this->class;
    }

    protected function findAttributes($id){

        if ($this->getReturnFirst()){
            $data = $this->getData();
            return $data[0];
        }

        return Arr::first($this->getData(), function($model) use ($id) {
            return $model['id'] === intval($id);
        });
    }

    protected function getReturnFirst(): bool {
        return $this->returnFirst;
    }
}
