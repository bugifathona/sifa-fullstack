<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public $label, $var, $placeholder, $options, $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $var, $placeholder = '--', $options = [], $selected = '')
    {
        $this->label = $label;
        $this->var = $var;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-select');
    }
}
