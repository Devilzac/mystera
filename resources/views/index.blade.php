<!DOCTYPE html>
<html lang="en">
<head>
  <x-head></x-head>
</head>
<body>
   
   <x-app-layout>        
       <x-nav-mystera></x-nav-mystera>     
        <div id="container">     
            <!-- START LIST -->
            <ul class="list-flex">
                @foreach ($list as $key => $character)    
                <li class="list-flex">
                    <a href="{{url('/main/'.$character->id)}}">
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
                                Alts: {{ count($character->alt) }} 
                            </div>
                        </div>
                    </a>
                </li>    
                <hr>      
                @endforeach()    
            </ul>   
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </x-app-layout>
</body>
</html>