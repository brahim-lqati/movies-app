<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Movies App</title>
<link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
@yield('style')

  <style>
      body{
            background-color: rgba(3,29,51,1); 
      }
      .navbar{
        background-color: rgba(3,29,51,1);
        border-bottom: 0.25px solid white;
      }
      .navbar a{
          color: white;
          font-weight: bold;
      }
      .navbar li{
          margin-left: 10px;
      }
      .navbar div{
          margin-left: 100px;
      }
      .form-control{
        background-color: #051346;
     
        
      }
  </style>
 
</head>
<body>
    <nav class="navbar navbar-expand-lg p-3">
        <a class="navbar-brand ml-5" href="{{url('/movies')}}">MovieApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Movies <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">TV Shows</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Actors</a>
            </li>
          </ul>
        

        </div>
      </nav>



      @yield('content')

      

  <script src="{{asset('/js/bootstrap.min.js')}}"></script>  
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  
 
</body>
</html>