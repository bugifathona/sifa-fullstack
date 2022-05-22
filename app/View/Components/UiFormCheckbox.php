<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UiFormCheckbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
</div>
blade;
    }
}
