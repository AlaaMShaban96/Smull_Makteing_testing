<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
            #mt{
        
            margin-top: 60px;
            } 
            </style>
   
    <title>@yield("titel")</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
 
      
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        @auth
    <a class="navbar-brand" href="{{url('/')}}">Alaa</a>
        @endauth
        @guest
    <a class="navbar-brand" href="{{url('/')}}">Navbar</a>

        @endguest
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                    <a class="nav-link active" href="{{url('items/create')}}">ADD Items</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{url('sinup / view')}}">sinup</a>
            </li>
          
            <li class="nav-item">
            <a class="nav-link" href="{{url('login')}}">login</a>
            </li>
          
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div id="mt"></div>

    @yield('body')



    


    
</body>
</html>