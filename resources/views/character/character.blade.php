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
    <x-nav></x-nav>
    <div id="container">     
        <h1>Main</h1>
        <!-- START LIST -->
        <ul class="list-flex">
            <li class="list-flex">
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
                            Alt: {{ count($character->alt) }} 
                        </div>
                    </div>
            </li>    
            <hr>
              
            <h3>Description</h3>
            <li class="list-flex">
                <div class="charList">
                    <div class="mainCharInfo description">
                        {{$character->description}}
                    </div>
                </div>
            </li> 
        </ul>

    </div>
    <div id="container" style="margin-top:15px;">           
    <h2>Alts</h2>
        <ul class="list-flex">
        @foreach ($character->alt as $alt) 
        <li class="list-flex">
            <a href="{{url('/alt/'.$alt->id)}}">
                <div class="charList">
                    <img class="" src="{{url('images/'.rand(1, 10).'.webp')}}" alt="{{$alt->name}}">
                    <div class="mainCharInfo">
                        <span class="">
                        {{$alt->name}} 
                        </span>
                        <span class="">
                            {{$alt->tribe}}
                        </span>
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