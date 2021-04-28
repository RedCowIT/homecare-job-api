<?php

namespace Modules\Core\Services;

interface EntityService
{
    function find($id);

    function query(array $params);
}
