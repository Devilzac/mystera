<!DOCTYPE html>
<html lang="en">
<head>
    <x-main-alt-detail-head ></x-main-alt-detail-head>
</head>
<body>
  <x-nav-mystera></x-nav-mystera>
      
    <div id="container">     
        <h1>Alt</h1>
        <!-- START LIST -->
        <ul class="list-flex">            
            <li class="list-flex">
                    <div class="charList">
                        <img class="" src="{{url('images/'.rand(1, 6).'.webp')}}" alt="{{$character->name}}">
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
    <h2>Main</h2>
        <ul class="list-flex">
        @foreach ($character->main as $key => $main) 
        <li class="list-flex">
            <a href="{{url('/main/'.$main->id)}}">
                <div class="charList">
                    <img class="" src="{{url('images/'.rand(1, 6).'.webp')}}" alt="{{$main->name}}">
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
            <hr>     
        @endforeach()    
    </ul>   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>