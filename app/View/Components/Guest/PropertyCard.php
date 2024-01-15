<?php

namespace App\View\Components\Guest;

use App\Models\Guest\Property;
use Illuminate\View\Component;

class PropertyCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $title,
        public $location,
        public $link,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.guest.property-card');
    }
}
