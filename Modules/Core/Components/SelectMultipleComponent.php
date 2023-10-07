<?php

namespace Modules\Core\Components;

use Illuminate\View\Component;

class SelectMultipleComponent extends Component
{
    public $item;
    public $name;
    public $options;
    public $multiple = true;
    public $placeholder = null;
    public $label = null;
    public function __construct($item, $name, $options, $multiple = true, $placeholder = null, $label)
    {
        $this->item = $item;
        $this->name = $name;
        $this->options = $options;
        $this->multiple = $multiple;
        $this->placeholder = $placeholder;
        $this->label = $label;
    }

    public function render()
    {
        return view("core::components.select-mutiable");
    }
}
