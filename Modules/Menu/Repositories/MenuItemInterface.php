<?php


namespace Modules\Menu\Repositories;


interface MenuItemInterface
{
    public function getTree($menuId, $columns = ['*']);

    public function updateTree(array $data);
}
