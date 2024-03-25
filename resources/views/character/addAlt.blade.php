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
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}">Mystera Legacy Tracker</a>
          <div class="" id="navbarSupportedContent">            
                <!-- START SEARCH -->
                <form action={{ route('character.search') }} class="d-flex" role="search" method="GET">
                    <div class="cntSearch">
                        <div class="form-switch">
                            <input type="search" id="search" name="search" class="form-control me-2" placeholder="Character name..." aria-label="Search">                    
                            <div class="btnAlt">
                                <input class="form-check-input" type="checkbox" name="searchType" role="switch" id="searchType">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </form>            
                <!-- END SEARCH -->
          </div>
        </div>
      </nav>
      
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Mains List</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{ url('/alts') }}">Alts List</a>
                </li>
            </ul>
        </div>
    </nav>
    <form  id="container" action="{{ url('/adding/alt')}}" method="post" class="block">
        @csrf
        <label for="name">Name: </label><input type="text" placeholder="Alt Character Name" name="name" required id="name">
        <label for="tribe">Tribe: </label><input type="text" placeholder="Current tribe" name="tribe" required id="tribe">
        <label for="description">Description: </label><input type="text" placeholder="Small description" name="description" required id="description">
        <button type="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>


</html>