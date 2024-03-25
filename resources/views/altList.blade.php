<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mystera Legacy Character Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css'); }}">      
    <link rel="stylesheet" href="{{ URL::asset('css/main.css'); }}">  
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Mystera Legacy Tracker</a>
          <div class="" id="navbarSupportedContent">            
                <!-- START SEARCH -->
                <form action={{ route('character.search') }} class="d-flex" role="search" method="GET">
                    <div class="cntSearch">
                        <div class="form-switch">
                            <input type="search" id="search" name="search" class="form-control me-2" placeholder="Character name..." aria-label="Search">                    
                            <div class="btnAlt">
                                <input class="form-check-input" type="checkbox" name="searchType" role="switch" id="searchType">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </form>            
                <!-- END SEARCH -->
          </div>
        </div>
      </nav>
      
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Mains List</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{ url('/alts') }}">Alts List</a>
                </li>
            </ul>
        </div>
    </nav>
      
    <nav class="navbar charArea navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <div class="addMainAlt" id="navbarSupportedContent">            
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{  url('/add/main') }}">Add New Main</a>
                </li>
                <li class="nav-item relation">
                  <a class="nav-link" aria-current="page" href="{{  url('/relation') }}"><img src="{{url('images/toggle/social.webp')}}" alt=""></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{  url('/add/alt') }}">Add New Alt</a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <header>        
    </header>
    <div id="container">     
        <!-- START LIST -->
        <ul class="list-flex">
            @foreach ($list as $key => $character)    
            <li class="list-flex">
                <a href="{{url('/alt/'.$character->id)}}">
                    <div class="charList">
                        <img class="" src="{{url('images/'.rand(1, 10).'.webp')}}" alt="{{$character->name}}">
                        <div class="mainCharInfo">
                            <span class="">
                            {{$character->name}}
                            </span>
                            <span class="">
                                {{$character->tribe}}
                            </span>
                        </div>
                        <div class="altAmount">
                            Main: {{ count($character->main) }} 
                        </div>
                    </div>
                </a>
            </li>    
            <hr>     
            @endforeach()    
        </ul>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>