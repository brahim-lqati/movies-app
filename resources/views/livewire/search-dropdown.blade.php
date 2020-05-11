<style>
    .test{
        border: 1px solid red;
        position: relative;
    }
    .testP{
        position: absolute;
        width: 100%;
    }
</style>


<div class="mr-5 test">
    <input wire:model="search" class="form-control" type="text" placeholder="Search"> 
    <div class="testP mx-3">
        <ul class="list-group testP">
            @if($movies != null)
            @foreach ($movies as $movie)
                 <li class="list-group-item">{{ $movie['title'] }}</li>
            @endforeach
            @endif
            
          </ul>
       </div>
  
    
</div>




