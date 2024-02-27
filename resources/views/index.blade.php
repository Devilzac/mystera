<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Marcellus", serif;
            font-weight: 400;
            font-style: normal;
        }     
        .mainChar{
            text-align: center;
            padding:15px;
            color:#fff;
        }   
        body{
            background: url( {{url('images/bg/bg'.rand(1, 2).'.webp')}} );
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        #container{
            background: rgba(0,0,0, 0.8);
            padding: 30px;
            border-radius: 15px;
            width: 100%;
        }
        .lupa{
            stroke:#fff !important;
        }
    </style>
</head>
<body style="max-width:720px;margin:auto;">
    <div id="container">
        <h1 class="mainChar" >Mystera Legacy Character Tracking</h1>
        <hr>
        <br>

        <!-- START SEARCH -->
        <form action={{ route('character.search') }} class="max-w-md mx-auto" method="GET">   
            <label for="search" class="mb-2 text-sm font-medium text-white-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-white-500 dark:text-white-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path class="lupa" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="search" name="search" class="block w-full mb-9 p-4 ps-10 text-sm text-white-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Character Name..." required />
                <div style="position: absolute;bottom: -30px;display: flex;flex-direction: row;justify-content: space-between;width: 200px;">
                    <input type="radio" checked name="searchType" value="main" id="searchType">
                    <label for="searchType" class="mb-1 text-sm font-medium text-white-900 dark:text-white">Main</label>
                    <input type="radio" name="searchType" value="alt" id="searchType-2">
                    <label for="searchType-2" class="mb-1 text-sm font-medium text-white-900 dark:text-white">Alt</label>
                </div>
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <!-- END SEARCH -->
        <!-- START LIST -->
        <ul class="max-h400 divide-y divide-white1-200 dark:divide-white1-700">
            @foreach ($list as $character)    
            <li class="pb-1 sm:pb-1 pt-1 sm:pt-1">
                <a href="{{url('/main/'.$character->id)}}">
                    <div class="flex items-center space-x-4 rtl:space-x-reverse">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8 rounded-full" src="{{url('images/'.rand(1, 6).'.webp')}}" alt="{{$character->name}}">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-white-900 truncate dark:text-white">
                            {{$character->name}}
                            </p>
                            <p class="text-sm text-white-500 truncate dark:text-white-400 dark:text-white">
                                {{$character->tribe}}
                            </p>
                        </div>
                        <div class="inline-flex items-center text-base font-semibold text-white-900 dark:text-white">
                            Alts: {{ count($character->alt) }} 
                        </div>
                    </div>
                </a>
            </li>    
            @endforeach()    
        </ul>   
    </div>
</body>
</html>