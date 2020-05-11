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


<div class="mr-5 test" wire:init="load">
    <h2>hello liveWire</h2>
    <button wire:click="increment">click here +</button>
    <span>{{$count}}</span>
   <input wire:model="search" type="text" placeholder="Search">
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
  
    
</div>




