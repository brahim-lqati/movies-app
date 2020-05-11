<?php

namespace App\Http\Controllers;

use App\Post;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    
    public function index(){
    
        $popular_movies = Http::withToken(config('services.tmdb.token'))
               ->get('https://api.themoviedb.org/3/movie/popular')
               ->json()['results'];
        $now_playing = Http::withToken(config('services.tmdb.token'))
               ->get('https://api.themoviedb.org/3/movie/now_playing')
               ->json()['results']; 
        $genres = Http::withToken(config('services.tmdb.token'))
               ->get('https://api.themoviedb.org/3/genre/movie/list')
               ->json()['genres'];  
        $genres = collect($genres)->mapWithKeys(function($item){
                    return [
                        $item['id'] => $item['name']
                    ];
               });   
  
            
       return view('index',[
           'popular_movies' => $popular_movies,
           'genres' => $genres,
           'now_playing' => $now_playing

       ]);
    
  

    }

    public function show($id){
        $movie = Http::withToken(config('services.tmdb.token'))
               ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
               ->json();
      // dd($movie);
        return view('show',[
            'movie' => $movie,

        ]);
    }
}
