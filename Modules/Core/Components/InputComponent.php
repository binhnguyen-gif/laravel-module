<?php

namespace Modules\Core\Components;

use Illuminate\View\Component;

class InputComponent extends Component
{

    /**
     * @var String
     */
    public $name;

    /**
     * @var String
     */
    public $type;

    /**
     * @var Object
     */
    public $item;

    public $label;

    public $required;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type, $item, $label, $required = false)
    {
        $this->name = $name;
        $this->type = $type;
        $this->item = $item;
        $this->label = $label;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('core::components.input');
    }
}
