<!DOCTYPE html>
<html lang="en">
<head>
   <x-main-alt-detail-head ></x-main-alt-detail-head>
</head>
<body>   
    <x-nav-mystera></x-nav-mystera> 
    <div id="container">     
        <h1>Main</h1>
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
            <li class="list-flex unlinkContainer">
                <a href="{{url('/alt/'.$alt->id)}}">
                    <div class="charList">
                        <img class="" src="{{url('images/'.rand(1, 6).'.webp')}}" alt="{{$alt->name}}">
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
                
                
                <!-- START unlink -->
                @auth()
                    <form method="post" action="{{ url('/unlink/alt/'.$alt->id) }} ">
                        @csrf            
                        <div class="form-group">                    
                            <button type="submit" class="btn btn-danger unlink-character">
                                <img src="{{url('/images/unlink.svg')}}" alt="unlink-{{$alt->name}}">
                            </button>
                        </div>
                    </form>                    
                @endauth
            
                <!-- END unlink -->
            </li>    
            <hr>     
            @endforeach()    
        </ul>   
    </div>
    @auth()
        <script>
            $('.unlink-character').click(function(e){
                e.preventDefault();
                if (confirm('Are you sure you want to unlink this Alt?')) {
                $(e.target).closest('form').submit();
            }
            });
        </script>    
    @endauth
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>