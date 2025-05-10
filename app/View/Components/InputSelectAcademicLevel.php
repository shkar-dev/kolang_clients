<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelectAcademicLevel extends Component
{
    /**
     * Create a new component instance.
     */
    public $column;
    public $name;
    public $label;
    public $placeholder;
    public $options = [];
    public function __construct($column, $name, $label, $placeholder, $options = [])
    {
        $this->column = $column;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->options =  $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select-academic-level');
    }
}
