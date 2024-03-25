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
        @if (isset($character))   
        <h1>Alt</h1>
        <!-- START LIST -->
        <ul class="list-flex">            
            <li>
                    <div class="charList">
                        <img class="" src="{{url('images/'.rand(1, 10).'.webp')}}" alt="{{$character->name}}">
                        <div class="mainCharInfo">
                            <span class="">
                            {{$character->name}}                                     
                            @if(count($character->main) >= 2)
                                >>>Shared Account<<<
                            @endif
                            </span>                 
                            <span class="">
                                {{$character->tribe}}
                            </span>  
                        </div>
                        <div class="altAmount">
                            Main: {{ count($character->main) }} 
                        </div>
                    </div>
            </li>   
            <hr>              
            <h3>Description</h3>
            <li>
                <div class="charList">
                    <div class="mainCharInfo description">
                        {{$character->description}}
                    </div>
                </div>
            </li> 
        </ul>
        @else        
            <h3>There is no character with that name. </h3>              
        @endif
    </div>    
    @if (isset($character))   
        <div id="container" style="margin-top:15px;">           
        <h2>Main</h2>
            <ul class="list-grid">
                @foreach ($character->main as $key => $main) 
                    <li class="chip">
                        <a href="{{url('/main/'.$main->id)}}">
                            <div class="charList">
                                <img class="" src="{{url('images/'.rand(1, 10).'.webp')}}" alt="{{$main->name}}">
                                <div class="mainCharInfo">
                                    <span class="">
                                    {{$main->name}}
                                    </span>
                                    <span class="">
                                        {{$main->tribe}}
                                    </span>                                 
                                </div>
                            </div>
                        </a>
                    </li>     
                @endforeach()    
            </ul>   
        </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>