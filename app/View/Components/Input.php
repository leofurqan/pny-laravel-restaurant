<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $title;
    public $id;
    public $type;
    public $required;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $title, $id, $type, $required = 0)
    {
        $this->name = $name;
        $this->title = $title;
        $this->id = $id;
        $this->type = $type;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
