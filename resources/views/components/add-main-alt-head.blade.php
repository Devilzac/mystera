<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
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
    * {
        font-family: "Pixelify Sans", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }    
    body{
        background: url( {{url('images/bg/bg'.rand(1, 1).'.webp')}} );
        background-size: cover;
        height: 100vh;
        max-width: 1200px;
        margin: auto;
    }
    #container{
        background: rgba(0,0,0, 0.8);
        padding: 30px;
        border-radius: 15px;
        width: 90%;
        margin: auto;
        h1,h2,h3{
            color:#fff;
        }
    }
    .lupa{
        stroke:#fff !important;
    }
    header{
        display: flex;
        background: black;
        flex-direction: row;
    }
    .form-switch .form-check-input{
        margin: 10px 0px 5px 5px;
        background-image: url( {{ url('images/toggle/pixelSword2.webp') }} );
        background-position: left center;
        border-radius: 2em;
        transition: background-position .15s ease-in-out;         
        background-color: green;
        border-color: green;
        width: 100px;
        height: 20px;
        
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(0,150,0,.25);
        
        animation-name: example;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-timing-function: ease-in-out;
    }
    @keyframes example {
        from {            
            box-shadow: 0 0 0 0.2rem rgba(0,150,0,.2);
        }
        to {              
            box-shadow: 0 0 0 0.25rem rgba(0,150,0,.6);
        }
    }
    .form-switch .form-check-input::before{
        content:"Main";
        text-align: center;
        display: flex;
        justify-content: center;
        top: 0;
        font-size: 13px;
    }
    .form-switch .form-check-input:checked::before{
        content:"Alt";
        text-align: center;
        display: flex;
        justify-content: center;
        font-size: 13px;
    }
    
    .form-switch .form-check-input:checked{
        background-image: url( {{ url('images/toggle/pixelSword.webp') }} );
        background-position: right center;
        border-radius: 2em;
        transition: background-position .15s ease-in-out;     
    }
    
    .form-switch{
        display: flex;
        flex-direction: column;
        padding: 0;
    }
    .cntSearch {
        display: flex;
        button{
            height: fit-content;
            margin-left: 10px;
        }
    }
    .navbar{
        background: rgba(0,0,0, 0.7) !important;
        border-radius: 15px;
        width: 90%;
        left: 0;
        right: 0;
        margin: 15px auto 15px auto;
        padding: 0;
        overflow: hidden;
    }
    .navbar .nav-link, .navbar-brand, label{
        color: #fff !important;
    }
    .btnAlt{
        display: flex;
        justify-content: space-between;
        button{
            height: fit-content;
            border-radius: 2em;
            width: 100px;
            margin: 10px 0px 5px 5px;
            padding: 0px;
            font-size: 13px;
        }
    }
    #navbarSupportedContent{
        background: rgba(0,0,0, 0.3);
        padding: 15px;
    }
    .container-fluid{
        padding: 0px 0px 0px 15px;
    }
    .list-flex{
        display: flex;
        flex-direction: column;
        margin: 0;
        padding: 0;
        a{
            text-decoration:none;
        }
        hr{
            color:#fff;
        }
    }
    .charList{
        display: flex;
        img{
            height: 52px;
        }
        .mainCharInfo, .altAmount{
            color:#fff;
        }
    }
    .mainCharInfo{
        display: flex;
        flex-direction: column;
        width: 100%;
        justify-content: flex-end;
        margin-left: 15px;             
        &.description{
            margin-left: 0px;
        }
    }
    .addMainAlt{
        display: flex;
        width: 100%;
        flex-direction: row;
        padding: 0;
        vertical-align: middle;
        ul{
            display: flex;
            width: 100%;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
        }
    }
    .relation{
        background: rgba(0,0,0,0.4);
        border-radius: 15px;
        transition: all 0.5s;
        &:hover{
            background: rgba(0,0,0,0.8);
            transition: all 0.5s;
            transform: scale(1.2);
        }
        img{
            width: 50px;
            height: 100%;
            filter: invert(1);
        }
    }
    .navbar.charArea{
        overflow: visible;
            .nav-item{
                a{
                    transition: all 0.5s;
                &:hover{
                    color: #46b363 !important;
                    transition: all 0.5s;
                }
            }
        }          
    }
</style>