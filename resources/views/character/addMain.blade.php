<!DOCTYPE html>
<html lang="en">
<head>
  <x-add-main-alt-head></x-add-main-alt-head>
</head>
<body>   
    <x-nav-mystera></x-nav-mystera>   
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