<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UiSidebar extends Component
{
    public $menuList, $activeLevel1, $activeLevel2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($menuList = [], $activeLevel1 = null, $activeLevel2 = null)
    {
        $this->menuList = $menuList;
        $this->activeLevel1 = $activeLevel1;
        $this->activeLevel2 = $activeLevel2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui-sidebar');
    }
}
