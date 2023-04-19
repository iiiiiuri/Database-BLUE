<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css"/>
   <link rel="stylesheet" type="text/css" href="stylesheet/slick-theme.css"/>
 

   </head>
   <link rel="stylesheet" href="stylesheet/styleProduct.css">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;700&display=swap" rel="stylesheet">

   <body>
      <header class = "cabecalho">
         <a class = "menuToggle">
         <img src="docs/Toggle.svg"></img></a>
         
         
         <div class ="logo">
            <img src="docs/DB-BLUE.svg" alt="logo" width="504" hidth="400"></image>
         </div>
         <nav class = "menu">
            <ul>
               <li><a href="#Home">Home</a></li>
               <li><a href="#About">About</a></li>
               <li><a href="#Contact">Contact</a></li>
               <li><a href="#Price">Price</a></li>
            </ul>          
         </nav>
      </header>

      <div class="main" >
        
            <div class = "carrosel">

            <div><img src="docs/carrosel1.svg"> </img></div>    
            <div><img src="docs/carrosel2.svg"> </img></div>
            <div><img src="docs/carrosel3.svg"> </img></div>
 

            </div>
            
         </div>
         <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
         <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
         <script type="text/javascript" src="Js/slick.min.js"></script>
				

<script>




$('.carrosel').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrow: false,
  autoplay: true,
  fade:true,
  autoplaySpeed: 5000,
  
});

</script>
   </body>
</html>
