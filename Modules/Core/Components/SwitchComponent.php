<?php


namespace Modules\Core\Components;


use Illuminate\View\Component;

class SwitchComponent extends Component
{
    public $name;
    public $item;
    public $label;
    public $default;
    public function __construct($name, $item, $label, $default = false)
    {
        $this->name = $name;
        $this->item = $item;
        $this->label = $label;
        $this->default = $default;
    }


    public function render()
    {
        return view("core::components.switch");
    }
}
