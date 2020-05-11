<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
</head>
<body>
   
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
        Play Trailer
    </button>
      <!-- Modal -->
      <div  class="modal fade mt-5" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg " role="document" style="border:2px solid green">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Show trailer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                cococococ
            {{-- <iframe width="100%" height="400px" src="https://www.youtube.com/watch?v={{$trailer}}" frameborder="0" allowfullscreen></iframe> --}}
            </div>
            
          </div>
        </div>
      </div>


      <script src="{{asset('/js/bootstrap.min.js')}}"></script> 
</body>
</html>