<style>
         .star{
             width: 16px;
             height: 16px;
         }
         .card-img-top:hover{
            transition: 0.5s;
             opacity: 0.5;
         }
         .rr{
             position: relative;
         }
</style>

<div class="row">
    @foreach ($movies as $movie)
    <div class="col-md-3 col-sm-6 my-3 d-flex">
     <div class="card rr">
         <a href="{{route('movies.show',$movie['id'])}}">
         <img class="card-img-top" src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="Card image cap">
        </a>
         <div class="card-body">
           <h5 class="card-title">{{$movie['title']}}</h5>
           <span>
               <img class="star" src="{{asset('icons/star.png')}}">
               {{$movie['vote_average']*10 .'%'}}
          </span>
          <div>
              @foreach ($movie['genre_ids'] as $id)
                  {{$genres[$id]}} @if(!$loop->last) |@endif
              @endforeach
          </div>
           
         </div>
       </div>
   </div>
    @endforeach
     
   </div>