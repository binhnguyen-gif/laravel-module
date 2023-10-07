<?php

namespace Modules\Core\Repositories;


interface ErrorRedirectRepositoryInterface
{
    public function findBy($key, $value, $columns = ['*']);
}
