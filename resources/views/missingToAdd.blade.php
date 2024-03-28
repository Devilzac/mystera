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
    </style>
</head>
<body>
    <x-nav></x-nav>
    <div id="container">     
        <!-- START LIST -->
        <ul class="list-flex">
            @foreach ($list as $key => $character)    
            <li>
                    <div class="charList">
                        <img class="" src="{{url('images/'.rand(1, 10).'.webp')}}" alt="{{$character->name}}">
                        <div class="mainCharInfo">
                            <span class="">
                                {{$character->character1}}
                            </span>
                            <span class="">
                                {{$character->character2}}
                            </span>
                        </div>
                        <span class="mainCharInfo">{{$character->message}}</span>
                    </div>
            </li>    
            <hr>      
            @endforeach()    
        </ul>   
        
        <form  id="container"  action="{{ url('/autor')}}" method="post" class="block">    
            @csrf      
            <button type="submit">Auto Relation</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>

