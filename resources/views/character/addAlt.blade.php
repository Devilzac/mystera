<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
   .block{
    display: flex;
    justify-content: flex-start;
    flex-direction: column;
    width: 200px;
   }
   body{
    padding: 15px;
   }
   .block input{
    margin: 5px 0;
   }
   .itemReceived{
    align-self: flex-start;
   }
</style>
</head>
<body>
    <form action="{{ url('/')}}" method="post" class="block">
        @csrf
        <label for="itemName">Item Name: </label><input type="text" name="itemName" id="itemName">
        <label for="qty">Quantity: </label><input type="number" name="qty" id="qty">
        <label for="itemReceived">Item Received: </label>
        <div class="itemReceived">
            <input type="radio" name="itemReceived" id="itemReceived" value=1> yes
            <input type="radio" name="itemReceived" id="itemReceived-2" value=0 > no
        </div>
        <label for="qty">Tracking ID: </label><input type="text" placeholder="" name="trackingID" id="trackingID">
        <button type="submit">Submit</button>
    </form>
</body>


</html>