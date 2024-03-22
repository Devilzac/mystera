<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="w-100 sm:flex md:flex-row">
        <a class="navbar-brand w-100" href="{{ url('/') }}">Mystera Legacy Tracker</a>
        <div class="w-100" id="navbarSupportedContent">            
                <!-- START SEARCH -->
                <form action={{ route('character.search') }} class="flex" role="search" method="GET">
                    <div class="cntSearch float-end w-100">
                        <div class="form-switch  w-100">
                            <input type="search" id="search" name="search" class="form-control me-2 sm:w-100" placeholder="Character name..." aria-label="Search">                    
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
    @auth()
<nav class="navbar charArea navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <div class="addMainAlt" id="navbarSupportedContent">            
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{  url('/add/main') }}">Add New Main</a>
            </li>
            <li class="nav-item relation">
            <a class="nav-link" aria-current="page" href="{{  url('/relation') }}"><img src="{{url('images/toggle/social.webp')}}" alt=""></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{  url('/add/alt') }}">Add New Alt</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
@endauth