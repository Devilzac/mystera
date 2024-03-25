<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mystera Legacy Character Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css'); }}">  
    <link rel="stylesheet" href="{{ URL::asset('css/addCharacters.css'); }}">  
<style>
  
</style>
</head>
<body>  
    <x-nav></x-nav>
    <form  id="container"   action="{{ url('/adding/main')}}" method="post" class="block">
        @csrf
        <label for="name">Name: </label><input type="text" placeholder="Main Character Name" name="name" required id="name">
        <label for="tribe">Tribe: </label><input type="text" placeholder="Current tribe" name="tribe" required id="tribe">
        <label for="description">Description: </label><input type="text" placeholder="Small description" name="description" required id="description">
        <button type="submit">Submit</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>


</html>