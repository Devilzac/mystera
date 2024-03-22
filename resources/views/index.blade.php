<!DOCTYPE html>
<html lang="en">
<head>
  <x-head></x-head>
  <style>
    .slime-1{
        top: 0;
        bottom: 0;
        margin: auto;
        width: 37px;
        height: 38px;
        background-size: 512px 38px !important;
        background: url('images/slime/slime1.webp');
        animation: slime1 2s infinite steps(1, end);
        animation-direction: reverse;
        background-repeat: repeat-x;
    }
    .slime-2{
        width: 20px;
        height: 20px;
        background: url('images/slime/slime2.webp');
    }
    .slime-3{
        width: 20px;
        height: 20px;
        background: url('images/slime/slime3.webp');
    }
    .slime-4{
        width: 20px;
        height: 20px;
        background: url('images/slime/slime4.webp');
    }
    .slime-5{
        width: 20px;
        height: 20px;
        background: url('images/slime/slime5.webp');
    }
    .slime-6{
        width: 20px;
        height: 20px;
        background: url('images/slime/slime6.webp');
    }
    .slime-7{        
        top: 0;
        bottom: 0;
        margin: auto;
        width: 37px;
        height: 32px;
        background-size: 160px 32px !important;
        background: url('images/slime/slime7.webp');
        animation: slime7 0.7s infinite steps(1, end);
    }
    .slime-8{
        width: 20px;
        height: 20px;
        background: url('images/slime/slime8.webp');
    }
    .slime-9{
        width: 20px;
        height: 20px;
        background: url('images/slime/slime9.webp');
    }

    @keyframes slime1{
        6.25%{background-position-x: 0px;}
        12.5%{background-position-x: 32px;}
        18.75%{background-position-x: 64px;}
        25%{background-position-x: 96px;}
        31.25%{background-position-x: 128px;}
        37.5%{background-position-x: 160px;}
        43.75%{background-position-x: 192px;}
        50%{background-position-x: 224px;}
        56.25%{background-position-x: 256px;}
        62.5%{background-position-x: 288px;}
        68.75%{background-position-x: 320px;}
        75%{background-position-x: 352px;}
        81.25%{background-position-x: 384px;}
        87.5%{background-position-x: 416px;}
        93.75%{background-position-x: 448px;}
        100%{background-position-x: 480px;}
    }
    @keyframes slime2{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
    @keyframes slime3{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
    @keyframes slime4{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
    @keyframes slime5{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
    @keyframes slime6{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
    @keyframes slime7{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
    @keyframes slime8{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
    @keyframes slime9{
        0%{background-position-x: 0px;}
        20%{background-position-x: 32px;}
        40%{background-position-x: 64px;}
        60%{background-position-x: 96px;}
        80%{background-position-x: 128px;}
        100%{background-position-x: 160px;}
    }
  </style>
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
                            <div class="{{'slime-1'}}"></div>
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