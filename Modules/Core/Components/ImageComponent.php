<?php

namespace Modules\Core\Components;

use Illuminate\View\Component;

class ImageComponent extends Component
{
    public $name;

    public $item;

    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $item, $label)
    {
        $this->name = $name;
        $this->item = $item;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('core::components.image');
    }
}
