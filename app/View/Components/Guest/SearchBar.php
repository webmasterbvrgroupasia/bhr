<?php

namespace App\View\Components\Guest;

use Illuminate\View\Component;

class SearchBar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $fromTable
    )
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
        return view('components.guest.search-bar');
    }
}
