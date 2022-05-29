<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInputWeek extends Component
{
    public $label, $var, $placeholder, $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = "", $var = "", $placeholder = "", $value = null)
    {
        $this->label = $label;
        $this->var = $var;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input-week');
    }
}
