<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UiModal extends Component
{
    public $modalTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modalTitle)
    {
        $this->modalTitle = $modalTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui-modal');
    }
}
