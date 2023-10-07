<?php
namespace Modules\Page\Services;


use Modules\Page\Facades\PageLayout;

class PageLayoutService
{
    public $layout;
    /**
     * @param $name
     * @param $key
     * @param $view
     */
    public function add($name, $key, $view)
    {
        $this->layout[] = [
            'name'  =>  $name,
            'value'   =>  $key,
            'view'  =>  $view
        ];
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAll(){
        return $this->layout;
    }

    public function findView($key){
        foreach ($this->layout as $page){
            if ($page['value'] === $key){
                return $page['view'];
            }
        }
    }
}
