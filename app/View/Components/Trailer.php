<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Trailer extends Component
{
   
    public $trailer;

    public function __construct($trailer)

    {
        $this->trailer = $trailer;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.trailer');
    }
}
