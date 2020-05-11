<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search='';

    
    public function render()
    {
        if($this->search != '')
             $movies = Http::withToken(config('services.tmdb.token'))
                     ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
                     ->json()['results'];
        
        else
          $movies =null;
       
        return view('livewire.search-dropdown',[
            'movies' => $movies
        ]);
    }
}
