<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mystera Legacy Character Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/fonts.css'); }}">  
    <link rel="stylesheet" href="{{ URL::asset('css/relation.css'); }}">  
</head>
<body>
  <form  id="container"  action="{{ url('/relationship')}}" method="post" class="block">    
      @csrf      
        <div class="container">                 
          <h3>Mains</h3>
          <div class="row justify-content-between">
            <div class="form-check form-switch col-12">
              @foreach ($character as $char)
                  <div class="flexiCenter">
                    <input name="main[]" class="form-check-input" type="radio" id="flexSwitch{{$char->name}}" value="{{$char->id}}">
                    <label name="main[]"  class="form-check-label" for="flexSwitch{{$char->name}}">{{$char->name}}</label>
                  </div>
              @endforeach   
            </div>
          </div>
        </div>
      <hr>
        <div class="container">     
          <h3>Alts</h3> 
          <div class="row justify-content-between">          
            <div class="form-check form-switch col-12">
              @foreach ( $alt as $altChar)
                  <div class="flexiCenter">
                    <input name="alt[]"  class="form-check-input" type="checkbox" id="flexSwitch{{$altChar->name}}" value="{{$altChar->id}}">
                    <label name="alt[]"  class="form-check-label" for="flexSwitch{{$altChar->name}}">{{$altChar->name}}</label>
                  </div>
              @endforeach   
            </div>
          </div>
        </div>
        <hr>
        <button type="submit">Submit</button>
    </form>
    
    

    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>


</html>