<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MovieCard extends Component
{
    public $movies,$genres;

    public function __construct($movies,$genres)
    {
        $this->movies = $movies;
        $this->genres = $genres;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
