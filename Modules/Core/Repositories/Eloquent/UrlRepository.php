<?php

namespace Modules\Core\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\SeoUrl;
use Modules\Core\Repositories\UrlRepositoryInterface;

class UrlRepository implements UrlRepositoryInterface
{
    /** @var SeoUrl $model */
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findByRequestPath($path, $columns = ['*'])
    {
        return $this->model->where('slug', $path)->firstOrFail($columns);
    }

    public function whereMathRequestPath($path, $columns = ['*'])
    {
        return $this->model
            ->where('slug', $path)
            ->get($columns);
    }
}
