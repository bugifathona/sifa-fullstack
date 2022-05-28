<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInputPassword extends Component
{
    public $label, $var, $placeholder;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $var, $placeholder)
    {
        $this->label = $label;
        $this->var = $var;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input-password');
    }
}
