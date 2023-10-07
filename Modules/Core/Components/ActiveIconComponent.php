<?php


namespace Modules\Core\Components;


use Illuminate\View\Component;

class ActiveIconComponent extends Component
{

    public $name;
    public $item;
    public function __construct($item, $name)
    {
        $this->item = $item;
        $this->name = $name;
    }

    public function render()
    {
        return view("core::components.published");
    }
}
