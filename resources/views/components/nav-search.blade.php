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
      </div>
    </div>
</nav>