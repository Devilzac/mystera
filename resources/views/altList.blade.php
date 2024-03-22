<!DOCTYPE html>
<html lang="en">
<head>
    <x-head></x-head>
</head>
<body>  
    <x-nav-mystera></x-nav-mystera>   
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
                            <div class="{{'slime-'.rand(1,9)}}"></div>
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