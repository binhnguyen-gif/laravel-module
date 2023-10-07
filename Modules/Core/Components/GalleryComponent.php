<?php

namespace Modules\Core\Components;

use Illuminate\View\Component;

class GalleryComponent extends Component
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


    public function render()
    {
        return view("core::components.gallery");
    }
}
