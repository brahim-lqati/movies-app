@extends('layoute.main_layoute')

@section('style')
   <style>
         h3{
             color: #F0B20A;
         }
        
        
       
       </style>    
@endsection

@section('content')

<div class="container">
      <h3 class="mt-5">Populaire Movies</h3>
      
      <x-movie-card :movies="$popular_movies" :genres="$genres"/>
     
      <h3 class="mt-5">Now Playing</h3>
      <x-movie-card :movies="$now_playing" :genres="$genres"/>
      
</div>




@endsection