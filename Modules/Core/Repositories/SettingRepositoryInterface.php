<?php

namespace Modules\Core\Repositories;

interface SettingRepositoryInterface
{
    public function has($name);

    public function get($name, $default = null);

}
