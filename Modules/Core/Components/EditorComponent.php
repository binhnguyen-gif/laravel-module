<?php

namespace Modules\Core\Components;

use Illuminate\View\Component;
use Modules\Core\Entities\Admin;

class EditorComponent extends Component
{

    /**
     * @var String
     */
    public $name;

    /**
     * @var Object
     */
    public $item;

    public $label;

    public $modelUpload;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $item, $label, $modelUpload = '//Modules//Core//Entities//Admin')
    {
        $this->name = $name;
        $this->item = $item;
        $this->label = $label;
        $this->modelUpload = $modelUpload;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('core::components.editor');
    }
}
