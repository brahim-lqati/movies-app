<?php

namespace App\Http\Livewire;

use App\Post;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDown extends Component
{
    public $search = '';
    public $count=0;

    public function increment(){
        $this->count++;
    }
    public function load(){
        $this->search='prof';
    }
    
    public function render()
    {
       
        return view('livewire.search-down',[
           'posts' => Post::where('title','like','%'.$this->search.'%')->get(),
        ]);
    //    if($this->search != '')
    //        return view('livewire.search-down',[
    //                  'movies' => Http::withToken(config('services.tmdb.token'))
    //                      ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
    //                  ->json()['results']
    //     ]);
       
    }
}
