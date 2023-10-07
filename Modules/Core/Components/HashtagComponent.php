<?php


namespace Modules\Core\Components;


use Illuminate\View\Component;

class HashtagComponent extends Component
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

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type, $item, $label)
    {
        $this->name = $name;
        $this->type = $type;
        $this->item = $item;
        $this->label = $label;
    }


    public function render()
    {
        return view("core::components.hashtag");
    }
}
