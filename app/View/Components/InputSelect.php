<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputSelect extends Component
{
    /**
     * Create a new component instance.
     */
    public $column;
    public $name;
    public $label;
    public $placeholder;
    public function __construct($column, $name, $label, $placeholder)
    {
        $this->column = $column;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-select');
    }
}
