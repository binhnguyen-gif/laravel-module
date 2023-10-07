<?php


namespace Modules\Core\Components;


use Illuminate\View\Component;

class SelectComponent extends Component
{
    public $name;
    public $label;
    public $item;
    public $options;
    public function __construct($name, $item, $label, $options)
    {
        $this->name = $name;
        $this->label = $label;
        $this->item = $item;
        $this->options = $options;
    }


    public function render()
    {
        return view("core::components.select");
    }
}
