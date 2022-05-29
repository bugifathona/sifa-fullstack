<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInputPhone extends Component
{
    public $label, $var, $placeholder, $value, $pattern;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = "", $var = "", $placeholder = "", $value = null, $pattern = '')
    {
        $this->label = $label;
        $this->var = $var;
        $this->placeholder = $placeholder;
        $this->value = $value;
        $this->pattern = $pattern;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input-phone');
    }
}
