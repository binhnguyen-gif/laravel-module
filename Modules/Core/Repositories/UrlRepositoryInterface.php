<?php

namespace Modules\Core\Repositories;

interface UrlRepositoryInterface
{
    public function findByRequestPath($path, $columns = ['*']);

    public function whereMathRequestPath($path, $columns = ['*']);
}
