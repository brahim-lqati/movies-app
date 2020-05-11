@extends('layoute.main_layoute')
@section('style')
<style>
    p,h2,h5{
        color: white;
    }
    h3{
        color: #F0B20A;
    }
    .star{
        height: 12px;
        width: 12px;
    }
    span{
        color: white;
        font-size: small;
    }
    .card{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        background-color: rgba(3,29,51,1);
    }
   
   

</style>
@endsection
@section('content')
   
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{'https://image.tmdb.org/t/p/w300/'.$movie['poster_path']}}">
            </div>
            <div class="col-md-8">
                 <h2>{{$movie['title']}}</h2>
                 <span>
                    <img class="star" src="{{asset('icons/star.png')}}">
                    {{$movie['vote_average']*10 .'%'}}
               </span>
               <span> | {{$movie['release_date']}} |</span>
               <span>
                    @foreach ($movie['genres'] as $genre)
                       {{$genre['name']}} @if(!$loop->last), @endif
                    @endforeach
               </span>
                 <p class="mt-5">{{$movie['overview']}}</p>
                 <x-trailer :trailer="$movie['videos']['results'][0]['key']"/>
                 
                 
                 {{-- <button class="btn btn-warning mt-3"><a href="https://www.youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}">Show trailer</a></button> --}}

        
            </div>
        </div>
       
        <h3 class="my-5">Casts</h3>
        <div class="row">
            @foreach ($movie['credits']['cast'] as $cast)
            @if($loop->index < 8)
              <div class="col-md-3 col-sm-12 mb-5 d-flex">
                  <div class="card">
                    <img class="card-img-top" src="{{'https://image.tmdb.org/t/p/w500'.$cast['profile_path']}}">
                    <div>
                      <h5 class="card-title">{{$cast['name']}}</h5>
                      <span class="mt-0">{{$cast['character']}}</span>
                    </div>
                  </div>
              </div>
            @endif
            @endforeach
        </div>

        <h3 class="my-5">Images</h3>
        <div class="row">
            @foreach ($movie['images']['backdrops'] as $image)
            @if ($loop->index<6)
              <div class="col-lg-6 col-md-12 mb-5">
                 <img src="{{'https://image.tmdb.org/t/p/w500'.$image['file_path']}}">
              </div>   
                
            @endif
              
          @endforeach
             
        </div>

        </div>
   
 

@endsection