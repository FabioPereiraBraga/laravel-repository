<?php

declare(strict_types=1);

namespace App\Repositories;


abstract class Repository {

    public function __call($method, $arguments)
    {
        return call_user_func_array([ static::model(), $method ], $arguments);
    }

    public function __callStatic($method, $arguments)
    {
        return call_user_func_array([ static::model(), $method ], $arguments);
    }

   

}