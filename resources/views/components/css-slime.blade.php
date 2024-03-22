<style>
    .slime-1,.slime-2,.slime-3,.slime-4{        
        top: 0;
        bottom: 0;
        margin: auto;
        width: 37px;
        height: 38px;
        background-size: 512px 38px !important;
        background-repeat: repeat-x;

    }

    .slime-1{    
    background: url('images/slime/slime1.webp');
    }
    .slime-2{    
    background: url('images/slime/slime2.webp');
    }
    .slime-3{
    background: url('images/slime/slime3.webp');
    }
    .slime-4{
    background: url('images/slime/slime4.webp');
    }
    .slime-5{
    background-size: 480px 32px !important;    
    background: url('images/slime/slime5.webp');
    }
    .slime-6{
    background-size: 448px 32px !important;  
    background: url('images/slime/slime6.webp');
    }

    .slime-5, .slime-6{        
    width: 37px;
    height: 30px;
    }
    .slime-7{        
    background: url('images/slime/slime7.webp');
    }
    .slime-8{
    background: url('images/slime/slime8.webp');
    }
    .slime-9{
    background: url('images/slime/slime9.webp');
    }



    .charList:hover .slime-1, 
    .charList:hover .slime-2, 
    .charList:hover .slime-3, 
    .charList:hover .slime-4, 
    .charList:hover .slime-5, 
    .charList:hover .slime-6{
    animation: slime1-2-3-4-5-6 2s infinite steps(1, end);
    animation-direction: reverse;
    }
    .charList:hover .slime-7,
    .charList:hover .slime-8,
    .charList:hover .slime-9{
    animation: slime7-8-9 0.7s infinite steps(1, end);
    }
    .slime-7, .slime-8, .slime-9{        
    top: 0;
    bottom: 0;
    margin: auto;
    width: 37px;
    height: 32px;
    background-size: 160px 32px !important;
    }

    @keyframes slime1-2-3-4-5-6{
    6.25%{background-position-x: 0px;}
    12.5%{background-position-x: 32px;}
    18.75%{background-position-x: 64px;}
    25%{background-position-x: 96px;}
    31.25%{background-position-x: 128px;}
    37.5%{background-position-x: 160px;}
    43.75%{background-position-x: 192px;}
    50%{background-position-x: 224px;}
    56.25%{background-position-x: 256px;}
    62.5%{background-position-x: 288px;}
    68.75%{background-position-x: 320px;}
    75%{background-position-x: 352px;}
    81.25%{background-position-x: 384px;}
    87.5%{background-position-x: 416px;}
    93.75%{background-position-x: 448px;}
    100%{background-position-x: 480px;}
    }
    @keyframes slime7-8-9{
    0%{background-position-x: 0px;}
    20%{background-position-x: 32px;}
    40%{background-position-x: 64px;}
    60%{background-position-x: 96px;}
    80%{background-position-x: 128px;}
    100%{background-position-x: 160px;}
    }

    @media only screen and (max-width: 600px) {     
    .charList .slime-1, 
    .charList .slime-2, 
    .charList .slime-3, 
    .charList .slime-4, 
    .charList .slime-5, 
    .charList .slime-6{
        animation: slime1-2-3-4-5-6 2s infinite steps(1, end);
        animation-direction: reverse;
    }
    
    .charList .slime-7,
    .charList .slime-8,
    .charList .slime-9{
        animation: slime7-8-9 0.7s infinite steps(1, end);
    }
    }
</style>