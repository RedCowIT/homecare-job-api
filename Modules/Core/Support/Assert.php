<?php

namespace Modules\Core\Support;

class Assert
{
    public static function false($condition, $message = '', $code = 500)
    {
        if ($condition)
            throw new \LogicException($message, $code);
    }

    public static function true($condition, $message = '', $code = 500)
    {
        if (!$condition)
            throw new \LogicException($message, $code);
    }
}
