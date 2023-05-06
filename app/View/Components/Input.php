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
    public $inputType;
    public $required;
    public $darkmode;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $title, $id, $type, $required = 0, $darkmode = 0)
    {
        $this->name = $name;
        $this->title = $title;
        $this->id = $id;
        $this->inputType = $type;
        $this->required = $required;
        $this->darkmode = $darkmode;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
