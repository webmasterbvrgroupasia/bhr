<?php

namespace App\View\Components\CTA;

use Illuminate\View\Component;

class BVRProperty extends Component
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
        return view('components.c-t-a.b-v-r-property');
    }
}
