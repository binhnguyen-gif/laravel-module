<?php


namespace Modules\Core\Components;


use Illuminate\View\Component;

class DeleteComponent extends Component
{

    public $item;
    public $url;
    public function __construct($item, $url)
    {
        $this->item = $item;
        $this->url = $url;
    }


    public function render()
    {
        return view("core::components.delete");
    }
}
