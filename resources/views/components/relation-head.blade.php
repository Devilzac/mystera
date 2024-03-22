<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<style>
* {
        font-family: "Pixelify Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }     
    .mainChar, .form-check-label{
        text-align: center;
        padding:15px;
        color:#fff;
    }   
    body{
        background: url( {{url('images/bg/bg'.rand(1, 1).'.webp')}} );
        background-size: cover;
        max-width: 1200px;
        margin: auto;
    }
    #container{
        background: rgba(0,0,0, 0.8);
        padding: 30px;
        border-radius: 7px !important;
        width: 90%;
        height: 90vh;
        margin: auto;
        overflow: auto;   

                        
                /*
                *  STYLE 1
                */

                &::-webkit-scrollbar-track
                {
                border-radius: 10px;
                background-color: transparent;
                }

                &::-webkit-scrollbar
                {
                width: 12px;
                background-color: transparent;
                }

                &::-webkit-scrollbar-thumb
                {
                border-radius: 10px;
                background-color: #555;
                }
                
           
    }
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
.flexiCenter{
display: flex;
flex-direction: row;
align-items: center;
}
.form-check {
display: grid;
grid-template-columns: auto auto auto auto;
row-gap: 5px;
color: #fff;
}
h3{
color: #fff;
left: -15px;
position: relative;
}
hr{
color: #fff;
}
</style>