<?php


namespace Modules\Menu\Repositories;


class MenuItemRepository implements MenuItemInterface
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }


    public function getTree($menuId, $columns = ['*'])
    {
        $columns = array_merge($columns, [
            'parent_id',
            '_lft',
            '_rgt'
        ]);

        return $this->model
            ->where('menu_id', $menuId)
            ->defaultOrder()
            ->get($columns)
            ->toTree();
    }

    public function updateTree(array $data)
    {
        $lastNode = null;
        $lastRoot = null;
        foreach ($data as $item) {

            $model = $this->model->find($item['id']);
            $model->update($data);

            $model->update([
                'parent_id' => $item['parent_id'] ?? null
            ]);

            if ($lastRoot && empty($item['parent_id'])) {
                $model->afterNode($lastRoot)->save();
            }

            if ($lastNode && $model->parent_id && $lastNode->parent_id == $model->parent_id) {
                $model->afterNode($lastNode)->save();
            }

            $lastNode = $model;
            if (empty($item['parent_id'])) {
                $lastRoot = $model;
            }
        }
    }


    public function updateById(array $data, $id)
    {
        $model = $this->find($id);

        $model->update($data);

        return $model;
    }
}
