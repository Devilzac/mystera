<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $character->name }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 h-dvh text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-5 max-w-screen-sm lg:mb-10">
                <img class="mx-auto mb-3 w-10 h-10 rounded-full" src="{{url('images/'.rand(1, 6).'.webp')}}" alt="{{ $character->name }}">
                <h2 class="mb-3 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{ $character->name }}</h2>
                <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">{{ $character->description }}</p>
            </div> 
            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-6 lg:grid-cols-6">
                @foreach ($character->alt as $alt)
                    <div class="text-center text-gray-500 dark:text-gray-400">
                        <img class="mx-auto mb-3 w-10 h-10 rounded-full" src="{{url('images/'.rand(1, 6).'.webp')}}" alt="{{ $alt->name }}">
                        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            <a href="{{url('character/'.$alt->id)}}">{{$alt->name}}</a>
                        </h3>
                        <hr>     
                        <p>{{$alt->tribe}}</p>
                        <hr>                        
                        <small>{{$alt->description}}</small>                         
                    </div>
                @endforeach
            </div>  
        </div>
      </section>
</body>
</html>