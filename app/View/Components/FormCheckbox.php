<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormCheckbox extends Component
{
    public $label, $var, $options, $checked;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = '', $var = '', $options = null, $checked = null)
    {
        $this->label = $label;
        $this->var = $var;
        $this->options = $options;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-checkbox');
    }
}
