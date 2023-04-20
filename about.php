<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
  </head>
  <link rel="stylesheet" href="stylesheet/stylesAbout.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;700&display=swap" rel="stylesheet">
  <body>
    <header class = "cabecalho">
      <a class = "menuToggle">
      <img src="docs/Toggle.svg"></img></a>
      <div class ="logo">
        <img src="docs/DB-BLUE.svg" alt="logo" width="504" height="400"></img>
      </div>
      <nav class = "menu">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#Contact">Contact</a></li>
          <li><a href="price.php">Price</a></li>
        </ul>
      </nav>
    </header>
    <div class="main" >
      <div>
        <h1>Services</h1>
        <img id ="primeira" src="docs/carrosel1.svg" > </img>
        <p>We believe that every customer is unique, which is why we offer a wide range of cloud storage solutions that can be customized to meet each customer's needs.</p>
      </div>
      <div>
        <h1>Team</h1>
        <img id ="segunda" src="docs/carrosel2.svg" > </img>
        <p>Our team is made up of experienced and talented professionals, who are always looking for new ideas and trends to keep our company at the forefront of innovation.</p>
      </div>
      <div>
        <h1>Commitment</h1>
        <img id ="terceira" src="docs/carrosel3.svg" > </img>
        <p>We value transparency in everything we do, working closely with our customers to understand their needs and provide the most appropriate solutions.</p>
      </div>
    </div>





    <div class = "fim"><img src="docs/DB-BLUE.svg"  width="190" height="100"></div>

    <div class = "Carrosel">
        <div class = "slider">
          
          <div class = "slide">
            <input type="radio" name="radio" id="radio1">
            <input type="radio" name="radio" id="radio2">
            <input type="radio" name="radio" id="radio3">

            <div class="slide1">
              <img id="primeira"  src="docs/carrosel1.svg" alt="Primeira">
              <p>We believe that every customer is unique, which is why we offer a wide range of cloud storage solutions that can be customized to meet each customer's needs.</p>
            </div>
              
            <div class="slide2">
              <img id="segunda" src="docs/carrosel2.svg" alt="Segunda">
              <p>Our team is made up of experienced and talented professionals, who are always looking for new ideas and trends to keep our company at the forefront of innovation.</p>
            </div>


            <div class="slide3">
              <img id="terceira" src="docs/carrosel3.svg" alt="Terceira">
              <p>We value transparency in everything we do, working closely with our customers to understand their needs and provide the most appropriate solutions.</p>
            </div>


            <div class="auto-navigation">
              <div class="auto-btn1"></div>
              <div class="auto-btn2"></div>
              <div class="auto-btn3"></div>


            </div>



          </div>
            <div class="manual-navigation">
              <label for="radio1" class="manual-btn"></label>
              <label for="radio2" class="manual-btn"></label>
              <label for="radio3" class="manual-btn"></label>


            </div>








        </div>





    </div>

  </body>
  <script src="Js/carrosel.js"></script>
</html>
